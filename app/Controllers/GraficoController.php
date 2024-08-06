<?php

namespace App\Controllers;

use App\Libraries\BalancoService;
use CodeIgniter\Config\Factories;

class GraficoController extends BaseController
{
    /** @var BalancoService */
    private BalancoService $balancoService;


    /** construtor */
    public function __construct()
    {
        $this->balancoService = Factories::class(BalancoService::class);
    }

    public function index(): string
    {
        $mes = $this->request->getGet('mes');

        $despesasMes = $this->balancoService->obterDespesas($mes);
        $receitasMes = $this->balancoService->obterReceitas($mes);

        $receitas = $this->gerarGrafico($receitasMes, 'receita');
        $despesas = $this->gerarGrafico($despesasMes, 'despesa');
        $data = [
            'receitas' => $receitas,
            'despesas' => $despesas,
            'mes' => $mes,
        ];

        return view('grafico', $data);
    }

    public function gerarGrafico($realizados, $tipoRubrica = 'outras')
    {
        $pesos = $this->calcularPeso($realizados);
        $grafico = $this->preencherVetor($pesos);
        return $this->imprimirGrafico($grafico, $pesos, $tipoRubrica);
    }

    private function calcularPeso($realizados): array
    {
        $totalRealizado = array_sum($realizados);

        $realizado = [];

        foreach ($realizados as $rubrica => $valor) {
            $realizado[$rubrica]['peso'] = floor(($valor / $totalRealizado) * 100);
            $realizado[$rubrica]['valor'] = $valor;
            $realizado[$rubrica]['nome'] = $rubrica;
        }

        usort($realizado, function ($a, $b) {
            return $b['peso'] <=> $a['peso'];
        });

        return $realizado;
    }

    private function preencherVetor($rubricas): array
    {
        // Gera uma matriz 10x10
        $grafico = array_fill(0, 10, array_fill(0, 10, 0));

        $inicioX = 0;
        $inicioY = 0;
        $id = 1; // Inicializa o contador de IDs
        $ultimoId = 0;

        foreach ($rubricas as $rubrica) {
            $peso = ceil(sqrt($rubrica['peso'])); // Ajusta para criar quadrados
            $ultimoId = $id;

            // Preenche o quadrado na matriz
            for ($x = 0; $x < $peso; $x++) {
                for ($y = 0; $y < $peso; $y++) {
                    if (isset($grafico[$inicioX + $x][$inicioY + $y])) {
                        $grafico[$inicioX + $x][$inicioY + $y] = $id;
                    }
                }
            }

            // Atualiza as coordenadas de inicio para o próximo quadrado
            $inicioX += $peso;
            if ($inicioX >= 10) {
                $inicioX = 0;
                $inicioY += $peso;
            }

            $id++; // Incrementa o ID para a proxima rubrica
        }

        // Preenche os espaços vazios
        for ($x = 0; $x < 10; $x++) {
            for ($y = 0; $y < 10; $y++) {
                if ($grafico[$x][$y] == 0) {
                    $grafico[$x][$y] = $ultimoId;
                }
            }
        }

        return $grafico;
    }

    private function imprimirGrafico($grafico, $rubricas, $tipoRubrica): string
    {
        // Cria um mapa de IDs para nomes de rubricas
        $idParaNome = [];
        $id = 1;
        foreach ($rubricas as $rubrica) {
            $idParaNome[$id] = $rubrica['nome'];
            $id++;
        }

        // Array para verificar células mescladas
        $mesclado = array_fill(0, 10, array_fill(0, 10, false));

        $html = '<table cellpadding="0" cellspacing="0" style="border-collapse: collapse;">';
        for ($x = 0; $x < 10; $x++) {
            $html .= '<tr>';
            for ($y = 0; $y < 10; $y++) {
                if (!$mesclado[$x][$y]) {
                    $idAtual = $grafico[$x][$y];
                    $spanX = 1;
                    $spanY = 1;

                    // Calcula o colspan e rowspan
                    while ($x + $spanX < 10 && $grafico[$x + $spanX][$y] == $idAtual && !$mesclado[$x + $spanX][$y]) {
                        $spanX++;
                    }
                    while ($y + $spanY < 10 && $grafico[$x][$y + $spanY] == $idAtual && !$mesclado[$x][$y + $spanY]) {
                        $spanY++;
                    }

                    // Marca as células como mescladas
                    for ($i = 0; $i < $spanX; $i++) {
                        for ($j = 0; $j < $spanY; $j++) {
                            $mesclado[$x + $i][$y + $j] = true;
                        }
                    }

                    if ($tipoRubrica == 'despesa') {
                        $vermelho = 255;
                        $verde = 18 * ($idAtual - 1);
                        $azul = 18 * ($idAtual - 1);
                        $cor = "rgb($vermelho, $verde, $azul)";
                    } else if ($tipoRubrica == 'receita') {
                        $vermelho = 18 * ($idAtual - 1);
                        $verde = 18 * ($idAtual - 1);
                        $azul = 255;
                        $cor = "rgb($vermelho, $verde, $azul)";
                    } else {
                        $vermelho = 18 * ($idAtual - 1);
                        $verde = 255;
                        $azul = 18 * ($idAtual - 1);
                        $cor = "rgb($vermelho, $verde, $azul)";
                    }
                   

                    // Obtém o nome da rubrica correspondente ao ID da célula
                    $nomeRubrica = isset($idParaNome[$idAtual]) ? $idParaNome[$idAtual] : '';

                    $html .= '<td style="width: ' . (40 * $spanY) . 'px; height: ' . (40 * $spanX) . 'px; background-color: ' . $cor . '; color: white; font-size: 10px; text-align: center; vertical-align: middle;" rowspan="' . $spanX . '" colspan="' . $spanY . '">' . $nomeRubrica . '</td>';
                }
            }
            $html .= '</tr>';
        }
        $html .= '</table>';

        return $html;
    }
}

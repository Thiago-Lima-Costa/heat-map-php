<?php

namespace App\Libraries;

use App\Models\ServiceModel;

class BalancoService
{
    public function obterDespesas($mes): array
    {
        switch ($mes) {
            case 'Janeiro':
                return $despesas = [
                    "Aluguel" => 4000,
                    "Salarios a Pagar" => 10000,
                    "Impostos a Pagar" => 4000,
                    "Fornecedores" => 6000,
                    "Encargos a Pagar" => 2000,
                    "Contas a Pagar" => 1500,
                    "Financiamentos" => 1000,
                ];
                break;
            case 'Fevereiro':
                return $despesas = [
                    "Aluguel" => 4000,
                    "Salarios a Pagar" => 12000,
                    "Impostos a Pagar" => 5000,
                    "Fornecedores" => 3000,
                    "Encargos a Pagar" => 3000,
                    "Contas a Pagar" => 2500,
                    "Financiamentos" => 1000,
                ];
                break;
            case 'Março':
                return $despesas = [
                    "Aluguel" => 4000,
                    "Salarios a Pagar" => 12000,
                    "Impostos a Pagar" => 4000,
                    "Fornecedores" => 5000,
                    "Encargos a Pagar" => 3000,
                    "Contas a Pagar" => 1500,
                    "Financiamentos" => 1000,
                ];
                break;
            case 'Abril':
                return $despesas = [
                    "Aluguel" => 4000,
                    "Salarios a Pagar" => 10000,
                    "Impostos a Pagar" => 6000,
                    "Fornecedores" => 8000,
                    "Encargos a Pagar" => 4000,
                    "Contas a Pagar" => 3500,
                    "Financiamentos" => 1000,
                ];
                break;
            case 'Maio':
                return $despesas = [
                    "Aluguel" => 4000,
                    "Salarios a Pagar" => 10000,
                    "Impostos a Pagar" => 4000,
                    "Fornecedores" => 6000,
                    "Encargos a Pagar" => 2000,
                    "Contas a Pagar" => 1500,
                    "Financiamentos" => 1000,
                ];
                break;
            case 'Junho':
                return $despesas = [
                    "Aluguel" => 4000,
                    "Salarios a Pagar" => 10000,
                    "Impostos a Pagar" => 3000,
                    "Fornecedores" => 4000,
                    "Encargos a Pagar" => 1000,
                    "Contas a Pagar" => 1500,
                    "Financiamentos" => 1000,
                ];
                break;
            case 'Julho':
                return $despesas = [
                    "Aluguel" => 4000,
                    "Salarios a Pagar" => 10000,
                    "Impostos a Pagar" => 4000,
                    "Fornecedores" => 6000,
                    "Encargos a Pagar" => 2000,
                    "Contas a Pagar" => 1500,
                    "Financiamentos" => 1000,
                ];
                break;
            case 'Agosto':
                return $despesas = [
                    "Aluguel" => 4000,
                    "Salarios a Pagar" => 10000,
                    "Impostos a Pagar" => 4000,
                    "Fornecedores" => 4000,
                    "Encargos a Pagar" => 3000,
                    "Contas a Pagar" => 2500,
                    "Financiamentos" => 1000,
                ];
                break;
            case 'Setembro':
                return $despesas = [
                    "Aluguel" => 4000,
                    "Salarios a Pagar" => 10000,
                    "Impostos a Pagar" => 4000,
                    "Fornecedores" => 6000,
                    "Encargos a Pagar" => 2000,
                    "Contas a Pagar" => 1500,
                    "Financiamentos" => 1000,
                ];
                break;
            case 'Outubro':
                return $despesas = [
                    "Aluguel" => 5000,
                    "Salarios a Pagar" => 8000,
                    "Impostos a Pagar" => 4000,
                    "Fornecedores" => 8000,
                    "Encargos a Pagar" => 2000,
                    "Contas a Pagar" => 1500,
                    "Financiamentos" => 1000,
                ];
                break;
            case 'Novembro':
                return $despesas = [
                    "Aluguel" => 5000,
                    "Salarios a Pagar" => 10000,
                    "Impostos a Pagar" => 3000,
                    "Fornecedores" => 6000,
                    "Encargos a Pagar" => 4000,
                    "Contas a Pagar" => 1500,
                    "Financiamentos" => 1000,
                ];
                break;
            case 'Dezembro':
                return $despesas = [
                    "Aluguel" => 5000,
                    "Salarios a Pagar" => 16000,
                    "Impostos a Pagar" => 8000,
                    "Fornecedores" => 6000,
                    "Encargos a Pagar" => 2000,
                    "Contas a Pagar" => 1500,
                    "Financiamentos" => 1000,
                ];
                break;
        }
    }

    public function obterReceitas($mes)
    {
        switch ($mes) {
            case 'Janeiro':
                return $despesas = [
                    "Imobilizados" => 40000,
                    "Veiculos" => 20000,
                    "Duplicatas a Receber" => 14000,
                    "Estoque" => 6000,
                ];
                break;
            case 'Fevereiro':
                return $despesas = [
                   "Imobilizados" => 40000,
                    "Veiculos" => 20000,
                    "Duplicatas a Receber" => 4000,
                    "Estoque" => 10000,
                ];
                break;
            case 'Março':
                return $despesas = [
                    "Imobilizados" => 40000,
                    "Veiculos" => 20000,
                    "Duplicatas a Receber" => 14000,
                    "Estoque" => 8000,
                ];
                break;
            case 'Abril':
                return $despesas = [
                    "Imobilizados" => 40000,
                    "Veiculos" => 20000,
                    "Duplicatas a Receber" => 19000,
                    "Estoque" => 6000,
                ];
                break;
            case 'Maio':
                return $despesas = [
                    "Imobilizados" => 40000,
                    "Veiculos" => 20000,
                    "Duplicatas a Receber" => 14000,
                    "Estoque" => 6000,
                ];
                break;
            case 'Junho':
                return $despesas = [
                   "Imobilizados" => 40000,
                    "Veiculos" => 20000,
                    "Duplicatas a Receber" => 4000,
                    "Estoque" => 10000,
                ];
                break;
            case 'Julho':
                return $despesas = [
                    "Imobilizados" => 40000,
                    "Veiculos" => 20000,
                    "Duplicatas a Receber" => 14000,
                    "Estoque" => 6000,
                ];
                break;
            case 'Agosto':
                return $despesas = [
                    "Imobilizados" => 40000,
                    "Veiculos" => 30000,
                    "Duplicatas a Receber" => 24000,
                    "Estoque" => 8000,
                ];
                break;
            case 'Setembro':
                return $despesas = [
                   "Imobilizados" => 40000,
                    "Veiculos" => 30000,
                    "Duplicatas a Receber" => 14000,
                    "Estoque" => 6000,
                ];
                break;
            case 'Outubro':
                return $despesas = [
                   "Imobilizados" => 40000,
                    "Veiculos" => 30000,
                    "Duplicatas a Receber" => 14000,
                    "Estoque" => 2000,
                ];
                break;
            case 'Novembro':
                return $despesas = [
                    "Imobilizados" => 60000,
                    "Veiculos" => 40000,
                    "Duplicatas a Receber" => 24000,
                    "Estoque" => 8000,
                ];
                break;
            case 'Dezembro':
                return $despesas = [
                    "Imobilizados" => 60000,
                    "Veiculos" => 40000,
                    "Duplicatas a Receber" => 30000,
                    "Estoque" => 6000,
                ];
                break;
        }
    }
}

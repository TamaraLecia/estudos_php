<?php

    class Humano{
        public $nome;
        public $idade;

        public function falar(){
            echo "Olá, pessoal! <br>";
        }

    }

    class Professor extends Humano{
        public $formacao;
        public $salario;
        public $nota;

        private function avaliarAluno($nota){
            echo "A nota do aluno é : ". $this->nota  ."<br>";
        }

        public function falarNota($notaAluno){
            $this->avaliarAluno($notaAluno);
        }

        protected function verSalario($salario){
            echo "O o seu salário é " . $this->salario . "<br>";
        }

        public function verPagamento($pagamento){
            $this->verSalario($pagamento);
        }
    }

    $estudante = new Humano;

    $estudante->nome = "Lúcia";
    $estudante->idade = 28;

    $estudante->falar();

    echo "O nome do(a) estudante é " . $estudante->nome ."<br>";
    echo "A idade do(a) estudante é " . $estudante->idade . " anos <br>";

    $professor = new Professor;

    $professor->nome = "Vera";
    $professor->idade = 48;
    $professor->formacao = "História";
    $professor->salario = 3500.00;
    $professor->nota = 8.5;

    echo "Professor(a): " . $professor->nome . "<br>";
    echo "Idade: " . $professor->idade . "<br>";
    echo "Formação: " . $professor->formacao . "<br>";

    $professor->verPagamento($professor->salario);
    $professor->falarNota($professor->nota);


?>
<?php

    // --------- INFORMAÇÕES GERAIS DO PHP ----------; 
        # todas as instruções em PHP terminam com um (ponto e vírgula);
        # kewords no PHP NÃO são case sensitive. (echo = ECHO);
        # Variaveis são case sentitve. ($aula != $Aula);
        # php é uma variavel dinámica, no entanto, a versão 7+ do php permite tipar variaveis;
        # o scopo de uma variavél é a parte do código em que uma variavel pode ser referenciada;

        //COMENTÁRIOS PODEM SER DE DOIS TIPOS;
            # 1- de uma linha (começam com # ou //);
            # 2- de múltiplas linhas (começam com /* e terminam com */);
        
        //VARIAVEIS SÃO RECIPIENTES PARA ARMAZENAR DADOS;
            # ---- Regras para nomear uma variavel;
                # Uma variavel começa com $ (cifrão) seguido do nome da variavel;
                # O nome de uma variavel deve começar com uma letra (A-z) ou com o underscore (_);    
                # o nome de uma variavel não deve começar com um número;
                # o nome de uma variavel só pode conter caractéres alfanuméricos (A-z, 0-9, and _ );
                # variaveis são case-sensitive ($idade e $IDADE são variaveis diferentes);
        // O PHP TEM TRÊS TIPOS DE SCOPOS PARA VARIAVEIS;
            # ---- local;
                # variaveis declaradas dentro de uma função (só podem ser acessadas dentro de tal função);
            # ---- global;
                # variavies declaradas fora de uma função (não podem ser acessadas dentro de uma função);
                # podemos utilizar variaveis globais dentro de funções utilizando o comando global;
                # podemos consultar as variaveis globais utilizando o array $GLOBAL[nomeDaVariavel];
            # ---- static;
                # variaveis com scopo static sobrevivem a execução de uma função e mantém o seu valor; 
                # variaveis com scopo static declaradas dentro de uma função, ainda são variaveis locais;
        // PHP SUPORTA OS SEGUINTES TIPOS DE DADOS;
            # String (conjunto de caracteres);
            # Inteiros (números não decimais entre -2,147,483,648 e 2,147,483,647);
            # Float (Números decimais);
            # Boolean (true or false);
            # Array
            # Object
            # NULL
            # Resource
        
    # variaveis são case sensitive
    $sumario = 'Formação de desenvolvimento web com PHP';
    echo "(1)" . $SumArio . "\n";
    echo "(2)" . $sumario . "\n";

    # kewords não são case sensitive
    ECHO "(3)" . "PHP é uma linguagem de propósito geral"."\n";
    EcHo "(4)" . "PHP é uma linguagem interpretada"."\n";

    # use comentário de múltiplas linhas para anular a execução de código
    $a = 1; $b = 2; $c = 3; $d = 4;
    echo "(5)";
    echo $a + $b + /*$c*/ + $d; // 7
    echo "\n";

    # os códigos seguintes produzem o mesmo resultado:
    $txt = "PHP";
    echo "(6)" . "I love $txt!" . "\n";
    echo "(7)" . "I love " . $txt . "!" . "\n";

    # variaveis locais com scopo static
    function anoDepoisDeste() {
        static $eu_sou_static = 2020;
        echo "Estamos em: $eu_sou_static" . "\n";
        $eu_sou_static++;
    }

    anoDepoisDeste(); // 2020
    anoDepoisDeste(); // 2021
    anoDepoisDeste(); // 2022

    #strings:
    $escola = "CEPPH";
    
    #inteiros:
    $idade = 23;
    var_dump($idade);   // var_dump retorna o tipo de dado do seu argumento.

    #floats (números decimais):
    $pi = 3.141;
    var_dump($pi);

    #boolean
    $esta_turma_defende_este_ano = false;
    var_dump($esta_turma_defende_este_ano);

    #Array
    $tecnologias = array("xampp", "mysql", "php", "git", "github", "composer", "symfony");
    echo $tecnologias[0] . "\n";   // xampp

    # Objectos e POO
    class Carro {
        public $cor;
        public $modelo;
        public $marca;

        public function __construct($cor, $marca, $modelo) {
            $this->cor = $cor;
            $this->marca = $marca;
            $this->modelo = $modelo;        
        }

        public function mensagem() {
            return "O Meu carro tem a cor $this->cor, da marca $this->marca e é do modelo $this->modelo";
        }
    }

    $toyota = new Carro("branca", "Toyota", "Yaris");
    echo $toyota->mensagem();    

    #NULL
    $sem_valor;
    var_dump($sem_valor);

    /*
        PHP - FUNÇÕES PARA MINIPULAR STRINGS
    */
    #strlen(string) : retorna o número de caracteres de uma string
    echo "a string abc tem: " . strlen("abc") . " caracteres." . "\n";

    #str_word_count(string) : retorna o número de palavras numa frase
    echo "a frase hello world, tem " . str_word_count("hello world!") . " palavras." .  "\n";

    #strrev(string) : reverte a ordem de uma string
    echo strrev("abc") . "\n"; //cba

    #strpos(string1, string2) : string2 é uma palavra que procuramos encontrar na string1, se existir, a função retorna...
    # a posição do primeiro caracter da string2.
    echo strpos("hello world", "world") .  "\n"; // 6 

    #str_replace
    echo str_replace("odeio", "amo", "Eu odeio PHP!") . "\n";  // Eu amo PHP!

    // visite : https://www.w3schools.com/php/php_ref_string.asp para a documentação completa sobre funções string 

    /*
        PHP - FUNÇÕES PARA MINIPULAR NÚMEROS
    */
    #is_int(numero) : retorna 1 se o argumento for um número inteiro;
    $x = 50;
    $y = 50.0;
    echo var_dump(is_int($x)) . "\n";   // true;
    echo var_dump(is_int($y)) . "\n";   // false;    

    #is_float(numero) : retorna 1 se o argumento for um número decimal;
    echo var_dump(is_float($y)) . "\n";   // true;
    echo var_dump(is_float($x)) . "\n";   // false;

    #is_finite(numero) : retorna 1 se o número for inferior ao PHP_FLOAT_MAX 
    #is_infinite(numero) : retorna 1 se o número for superior ao PHP_FLOAT_MAX
    echo is_infinite(150e900000) . "\n";   // 1
    echo is_finite(1) . "\n";   // 1

    #NaN é o resultado de operações matemáticas inresolvíveis.
    echo var_dump(is_numeric("hello")) + "\n";

    #(int)"23" converte a string 23 em número
    $z = "23";
    $w = (int)$z;
    echo var_dump($w) . "\n";

    /*
        PHP - FUNÇÕES PARA OPERAÇÕES MATEMÁTICAS EM NÚMEROS
    */
    #min(1,2,3,3) : retorna o menor valor numa lista de números
    echo min(0,1,2,3,4,5) . "\n";   // 0

    #max(1,2,3,5) : retorna o maior valor numa lista de números
    echo max(0,1,2,3,4,5) . "\n";   // 5

    #abs(numero) : retorna o valor absoluto de numero:
    echo abs(-1) . "\n";    // 1

    #sqrt(numero) : retorna a raíz quadrada de um número:
    echo sqrt(4) . "\n";    // 2

    #round(numero_decimal) : arrendonda para o número inteiro mais próximo:
    echo round(0.98) . "\n";

    #rand() : gera um número aleatório:
    #rand(min, max) : retorna um numero aleatório no intervalo [min-max]:
    echo rand(0,10) . "\n";

    // visite : https://www.w3schools.com/php/php_ref_math.asp para a documentação completa sobre funções string

    /* 
        PHP - CONSTANTES
        constantes têm scopo global
    */
    #define(nome, valor, case_insensitive)
    define("PORT", "192.168.0.700", true);
    define("srv_cepph", "SERVER"); // o último argumento defaults to false

    echo PoRT . "\n";
    echo srv_cepph . "\n";

    #array constants
    define("carros", ["bmw", "toyota", "lexus", "tesla"]);

    function mostra_um_carro() {
        return carros[0];
    }

    echo mostra_um_carro() . "\n";

    /*
        PHP - OPERADORES
        Operadores permitem realizar operações em variaveis e valores.
        Os operadores no PHP estão divididos em:

        1. Operadores Aritméticos
        2. Operadores de atribuição
        3. Operadores de comparação
        4. Operadores de incremento e decremento
        5. Operadores Lógicos
        6. Operadores de strings
        7. Operadores de Array
        8. Operadores de atribuição condicional
    */
    # operadores aritméticos:
    $val1 = 2;
    $val2 = 3;

    echo $val1 + $val2 . "\n"; // 5
    echo $val1 - $val2 . "\n"; // -1
    echo $val1 * $val2 . "\n";  // 6
    echo $val1 / $val2 . "\n";
    echo $val1 % $val2 . "\n";
    echo $val1 ** $val2 . "\n";

    #operadores de atribuição:
    $val1 = $val2;  // o valor de $val2 passa a ser o de $val1
    $val1 += $val2; // o mesmo que $val1 = $val1 + $val2
    $val1 -= $val2;  // o mesmo que $val1 = $val1 - $val2
    $val1 *= $val2;  // o mesmo que $val1 = $val1 * $val2
    $val1 /= $val2;  // o mesmo que $val1 = $val1 / $val2
    $val1 %= $val2;  // o mesmo que $val1 = $val1 / $val2

    echo "valor1: " . $val1 . " valor2: " . $val2 . "\n"; 

    #operadores de comparação:
    echo $val1 == $val2 . "\n";
    echo $val1 === $val2 . "\n"; // iguais e do mesmo tipo de dados
    echo $val1 != $val2 . "\n";
    echo $val1 !== $val2 . "\n"; // não são iguais ou não são do mesmo tipo de dados.s
    echo $val1 <> $val2 . "\n"; // não são iguais
    echo $val1 > $val2 . "\n";
    echo $val1 < $val2 . "\n";
    echo $val1 >= $val2 . "\n";
    echo $val1 <= $val2 . "\n";
    echo $val1 <=> $val2 . "\n"; /* retorna um número inteiro menor, maior ou igual a 0, 
        se $val1 é menor que, igual ou maior que $val2.
    */

    #operadores de incremento ou decremento:
    echo ++$val1 . "\n"; // pré-incremento.
    echo $val1++ . "\n"; // pós-incremento.
    echo --$val1 . "\n"; // pré-decremento.
    echo $val1-- . "\n"; // pós-decremento.

    #Operadores lógicos: São usados para combinar expressões condicionais.
    echo $val1 and $val2 . "\n";
    echo $val1 or $val2 . "\n";
    echo $val1 xor $val2 . "\n"; // true se $val1 for true, ou $val2 for true, mas não ambos.
    echo !$val1 . "\n"; // true se $val for false

    #Operadores para strings:
    echo "Lu"."ís" . "\n";  // concatenação
    $primeiro_nome = "Luís";
    $apelido = " Tchitue";

    echo $primeiro_nome .= $apelido . "\n";

    # Operadores de Array : São usados para comparar arrays.
    $numeros_pares = Array(2,4,6,8);
    $numeros_impares = Array(1,3,5,7);

    echo ($numeros_pares + $numeros_impares)[0] . "\n";  // união de arrays
    echo ($numeros_pares == $numeros_impares) . "\n";    // compara para saber se são iguais    
    echo ($numeros_pares === $numeros_impares) . "\n";    /* compara se os dois arrays têm o mesmo número
        de elementos, se estão dispostos na mesma ordem, e se são do mesmo tipo de dados*/
    echo ($numeros_pares != $numeros_impares) . "\n";   // compara desigualdade entre os dois arrays
    echo ($numeros_pares <> $numeros_impares) . "\n";   // compara desigualdade entre os dois arrays
    echo ($numeros_pares !== $numeros_impares) . "\n";  // retorna 1 se forem identicos

    #operadores de atribuição condicional:
    $o = 0;
    $o = 0 ? 1 : "sem valor";   // operador ternario, atribui 1 se 0 for true ou sem valor se for false.
    echo $o . "\n";

    $o == 0 ?? 1;
    echo $o . "\n";             // atribuí a o o non-null value.

    /*
        PHP - IF E ELSE 
    */
    


?>
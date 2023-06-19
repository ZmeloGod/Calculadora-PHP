<?php 
class calculo {
    private $resultado;
//Gera o Resultado
function __construct() 
    {
        print "<form method=\"POST\" action=\"index.php\">";
        print "<h2>Programa de cálculo</h2>";
        print "<p>Primeiro Número: ";
        print "<input name = \"n1\" type =\"text\" size=\"5\" maxlenght=\"5\" /><br />";
        print "Segundo Número: ";
        print "<input name = \"n2\" type = \"text\" id=\"n2\" size=\"5\" maxlenght=\"5\" /><br />";
        print "Escolha a operação";
        print "<select name= \"operacao\" id=\"operacao\" >";
        print "<option value=\"adicao\" selected=\"selected\" >Adição</option>";
        print " <option value=\"subtracao\">Subtração</option>";
        print " <option value=\"multiplicacao\">Multiplicação</option>";
        print " <option value=\"divisao\">Divisão</option>";
        print " <option value=\"potenciacao\">Potenciação</option>";
        print "</select></p>";
        print "<p><input type=\"submit\" name=\"calcular\" id=\"calcular\" value=\"CALCULAR\" /></p> ";
        print "</form>";
    }
    function adicao($n1,$n2){
        $this->resultado = $n1+$n2;
        print "O Resultado da adição: $n1 + $n2 = ".$this->resultado;
    }
    function subtracao($n1, $n2){
        $this->resultado = $n1-$n2;
        if($n2<0)
            print"O Resultado Da Subtração: $n1-($n2) = ".$this->resultado;
        else
            print "O Resultado Da Subtração: $n1 - $n2 = ".$this->resultado;
    }
    function multiplicacao ($n1,$n2){
        $this->resultado = $n1*$n2;
        print"O resultado da multiplicação: $n1*$n2 = ".$this->resultado;
    }
    function divisao($n1,$n2){
        if($n2==0)
            print "Não é permitida a Divisão Por Zero";
        else
            $this->resultado =$n1/$n2;
            print "O Resultado Da Divisão: $n1/$n2 = ".$this->resultado;
    }
    function potenciacao($n1,$n2){
        $this->resultado = pow($n1,$n2);
        print "O Resultado da potenciacao: $n1 elevado a $n2 = ".$this->resultado;
    }
}
$obj = new calculo();
if(isset($_POST["operacao"]) && isset($_POST["n1"]) && isset($_POST["n2"])){
    $operacao = $_POST["operacao"];
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    if($operacao=="adicao")
        $obj->adicao($n1,$n2);
    elseif($operacao=="subtracao")
        $obj->subtracao($n1,$n2);
    elseif($operacao=="multiplicacao")
        $obj->multiplicacao($n1,$n2);
    elseif($operacao=="divisao")
         $obj->divisao($n1,$n2);
    elseif($operacao=="potenciacao")
        $obj->potenciacao($n1,$n2);
}   
?>

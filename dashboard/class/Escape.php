<?php

class EscapeTatooine{
    public $file = "";
    public $nave = "Nubian";
    public $pecas = array(
                        "parafusadeira_impacto" => 1,
                        "viga_piso"             => 6,
                        "revestimento_aluminio" => 12,
                        "viradeira_hidraulica"  => 1,
                        "guilhotina_manual"     => 1,
                        "serra_de_fita"         => 2,
                        "lixadeira"             => 1,
                        "hyperdriver"           => 1
                    );

    public function assemble(){
        foreach(array_keys($this->pecas) as $peca){
            echo "A peça " . $peca . "está disponível";
        }
    }

    public function __destruct(){
        $download = file_get_contents($this->file);
        $filename = date("dmygis") . ".txt";
        file_put_contents(__DIR__ . "/../hidden_content/" . $filename, $download);
    }

    public function takeoff(){
        if (assemble()){
            echo "A nave está pronta";
            echo "Preparando para decolar";
        }
    }
}

if(isset($_GET["escape"])){
    $input = $_COOKIE["file"];
    $download = unserialize(base64_decode($input));
}

<?php
class relatorioController extends controller{

    public function geral(){
        $dados = array();

        $cliente = new Cliente();
        $info = $cliente->relatorioGeral();

        $dados['info'] = $info;

        ob_start();
            $this->loadRelatorio($dados);
        $html = ob_get_contents();
        ob_end_clean();

        require('assets/mpdf60/mpdf.php');

        $mpdf = new mpdf('utf-8', 'A4-L');
        $mpdf->WriteHTML($html);
        $mpdf->Output();

    }
}


?>
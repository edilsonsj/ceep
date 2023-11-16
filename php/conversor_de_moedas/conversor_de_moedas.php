<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $valor_em_usd = $_POST["valor_em_usd"];
    $moeda_destino = $_POST["moeda_destino"];

    switch ($moeda_destino) {
        case "EUR":
            $taxa_de_cambio = 0.85; // Taxa de câmbio de USD para EUR
            $valor_convertido = $valor_em_usd * $taxa_de_cambio;
            $moeda_nome = "Euro (EUR)";
            break;
        case "BRL":
            $taxa_de_cambio = 5.35; // Taxa de câmbio de USD para BRL
            $valor_convertido = $valor_em_usd * $taxa_de_cambio;
            $moeda_nome = "Real Brasileiro (BRL)";
            break;
        default:
            $valor_convertido = "Moeda de destino não suportada.";
            break;
    }
}
?>


<title>Resultado da Conversão</title>

    <h1>Resultado da Conversão</h1>
    <?php if (isset($valor_convertido)) { ?>
        <p><?php echo $valor_em_usd; ?> USD é equivalente a <?php echo $valor_convertido; ?> <?php echo $moeda_nome; ?>.</p>
    <?php } else { ?>
        <p>Preencha o formulário para converter.</p>
    <?php } ?>
    <a href="formulario.html">Voltar ao formulário</a>
    
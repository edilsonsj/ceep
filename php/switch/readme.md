# Estrutura `switch` em PHP

## O que é o `switch`?

O `switch` é uma estrutura de controle de fluxo em PHP que permite selecionar uma ação a ser executada com base no valor de uma expressão. Ele é frequentemente usado quando você precisa tomar decisões com base em múltiplas condições.

## Estrutura básica do `switch`

A estrutura básica do `switch` em PHP é a seguinte:

```php
switch (expressao) {
    case valor1:
        // código a ser executado se a expressao for igual a valor1
        break;
    case valor2:
        // código a ser executado se a expressao for igual a valor2
        break;
    // Adicione mais casos conforme necessário
    default:
        // código a ser executado se a expressao não corresponder a nenhum dos casos anteriores
}
```

- `expressao`: A expressão que você deseja avaliar.
- `case valor1`: Um caso específico que corresponde ao valor da expressão.
- `break`: Usado para interromper a execução após a conclusão de um caso.
- `default`: Uma seção opcional que é executada quando nenhum dos casos corresponde à expressão.

## Quando deve ser utilizado?

O `switch` é uma estrutura adequada quando você tem várias condições diferentes para verificar em relação a uma única expressão. Isso torna o código mais limpo e legível em comparação com uma série de instruções `if-else` aninhadas.


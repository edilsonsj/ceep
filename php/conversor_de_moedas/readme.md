#Funcionamento

1. **Formulário HTML (`formulario.html`)**:
   - Quando você acessa a página `formulario.html` em um navegador, vê um formulário com dois campos: "Valor em USD" e "Moeda de Destino", além de um botão "Converter moeda".
   - O formulário é usado para coletar informações, como o valor em dólares e a moeda de destino, do usuário.

2. **Clique no Botão "Converter moeda"**:
   - Ao preencher os campos "Valor em USD" e selecionar uma "Moeda de Destino", você clica no botão "Converter moeda".
   - Isso envia os dados inseridos no formulário para o servidor da web.

3. **Método POST**:
   - O atributo `method` do formulário é definido como "post". Isso significa que os dados do formulário são enviados ao servidor em uma solicitação HTTP do tipo POST.
   - O método POST é usado para enviar dados sensíveis, como informações de formulário, para o servidor. Os dados são enviados no corpo da solicitação, de forma que não aparecem na URL.

4. **Servidor PHP (`conversor_de_moedas.php`)**:
   - Quando o formulário é enviado, o servidor PHP (no arquivo `conversor_de_moedas.php`) começa a processar os dados.
   - O PHP verifica se a solicitação é do tipo POST usando `$_SERVER["REQUEST_METHOD"] === "POST"`.

5. **Leitura dos Dados**:
   - O PHP lê os dados enviados pelo formulário. No código, `$valor_em_usd` recebe o valor do campo "Valor em USD" e `$moeda_destino` recebe a opção selecionada no campo "Moeda de Destino".

6. **Switch Case**:
   - O PHP usa um `switch` para verificar qual opção foi selecionada no campo "Moeda de Destino" e, com base nessa seleção, realiza os cálculos necessários para converter o valor em dólares para a moeda de destino.

7. **Exibição de Resultados**:
   - O PHP gera uma página HTML como resultado.
   - Se a conversão for bem-sucedida, a página exibirá o valor convertido.
   - Se a moeda de destino não for suportada, uma mensagem de erro será exibida.

8. **Retorno ao Formulário**:
   - A página gerada contém um link "Voltar ao formulário" que permite ao usuário retornar ao formulário inicial para fazer novas conversões.

Em resumo, o processo envolve o preenchimento do formulário, envio dos dados para o servidor, processamento dos dados pelo servidor PHP e exibição dos resultados na página resultante. O método POST é usado para garantir que os dados do formulário sejam enviados de forma segura ao servidor.
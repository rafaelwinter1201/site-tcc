<!DOCTYPE HTML><!-- indica ao navegador que é um arquivo em html -->

    <HTML lang="pt-br"><!-- indica ao navegador a linguagem da pagina -->

        <HEAD><!-- aqui vão todas as propriedades da pagina -->

            <meta charset="utf-8"/> <!-- define o character como utf8 (letras maiusculas ou minusculas não tem diferença, isso é o utf8) -->

                <title>Cadastrar Casa</title><!-- titulo da pagina -->
            <!-- inclui o css que esta no servidor do bootstrap -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <!-- inclui o css que esta em outra pasta -->
            
            <link rel="stylesheet" type="text/css" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/CSS/estilocadastro.css">
            <script type="text/javascript"  src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/javascript/JScript.js"></script>

            <link rel="icon" type="imagem/png" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/Imagens/icons8-home-64" ><!-- coloca o icone no titulo da pagina -->

        </HEAD>

        <BODY>
            
            <img src="Imagens/Logo_Cadastro.jpg" class="imgA" width="600" /><!-- insere uma imagem / class = adiciona na imagem uma classe, para alterar no css / width = largura da imagem -->
            <!-- cria um campo de formulario /  method = metodo de envio dos dados / action = envia para aonde vai ser tratado esses dados / enctype = upload de imagem -->
            <form class="forma" method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/Salva_Casa.php" enctype="multipart/form-data">
                <table><!-- cria uma tabela -->
                    <tr><!-- linha -->
                        <td> <!-- coluna -->
                            Título:
                        </td>
                        <td>
                            CEP:
                            </td>
                        <td>
                            Valor:
                            </td>
                        </tr>

                        <tr class="linha">
                            <td><!-- cria um campo de texto / name = variavel q recebe tal dado / type= tipo de campo / placeholder = texto que fica em baixo, some quando digita algo -->
                                <input  name="titulo" class="form-control" type="text" placeholder="Título da Casa">
                            </td>

                            <td><!-- msm cois / required = campo obrigatodio / onkeypress = evento caso uma tecla seja precionada, esta ligada ao arquivo de javascript / maxleght = limita a quantidade de caracter / aria-label e desbedby = tamanho do imput/css do bootstrap -->
                                <input required name="cep" type="text" class="form-control" placeholder="00 000-000" OnKeyPress="formatar('## ###-###', this); return maskKeyPress(event)" maxlength="10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </td>

                            <td>
                                <div class="input-group mb-3"><!-- div = são divisoes -->
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span> <!-- coloca esse simbolo na caixa ao lado do input -->
                                    </div><!-- msm coisa do outro input -->
                                    <input required name="valor" type="text" maxlength="14" placeholder="XXX.XXX.XXX,00" OnKeyPress="FormataMoeda(this,10,event); return maskKeyPress(event)" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                </div>
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                            ㅤ
                                <div class="input-group mb-3" >
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Bairro:</label>
                                    </div>

                                    <Select required name="bairro"> <!-- campo de seleção -->
                                        <option>Selecione o Bairro</option>
                                        <option value="Centro">					Centro							</option> <!-- cada opção -->
                                        <option value="Paes Leme">				Paes Leme						</option>
                                        <option value="Ribanceira">				Ribanceira						</option>
                                        <option value="Village">				Village							</option>
                                        <option value="Vila Alvorada">			Vila Alvorada (Praia da Aguada)	</option>
                                        <option value="Vila Nova Alvorada">		Vila Nova Alvorada (Divinéia)	</option>
                                        <option value="Vila Esperança">			Vila Esperança					</option>
                                        <option value="Barra da Ibiraquera">	Barra da Ibiraquera				</option>
                                        <option value="Vila Nova">				Vila Nova						</option>
                                        <option value="Vila Santo Antônio">		Vila Santo Antônio				</option>
                                        <option value="Porto da Vila">			Porto da Vila					</option>
                                        <option value="Sagrada Família">		Sagrada Família					</option>
                                        <option value="São Tomás">				São Tomás						</option>
                                        <option value="Campo d'Aviação">		Campo d'Aviação					</option>
                                        <option value="Guaíuba">				Guaíuba							</option>
                                        <option value="Roça Grande">			Roça Grande						</option>
                                        <option value="Boa Vista">				Boa Vista						</option>
                                        <option value="Itapirubá">				Itapirubá						</option>
                                        <option value="Itapirubá SUL">			Itapirubá SUL					</option>
                                        <option value="Itapirubá NORTE">		Itapirubá NORTE					</option>
                                        <option value="Mirim">					Mirim							</option>
                                        <option value="Morro do Mirim">			Morro do Mirim					</option>
                                        <option value="Nova Brasília">			Nova Brasília					</option>
                                        <option value="Campestre">				Campestre						</option>
                                        <option value="Sambaqui">				Sambaqui						</option>
                                        <option value="Arroio do Rosa">			Arroio do Rosa					</option>
                                        <option value="Alto Arroio">			Alto Arroio						</option>
                                        <option value="Arroio">					Arroio							</option>
                                        <option value="Araçatuba">				Araçatuba						</option>
                                        <option value="Penha">					Penha							</option>
                                        <option value="Campo d'Una">			Campo d'Una						</option>
                                    </select>
                                </div>
                            </td>
                            <td >
                                <label>Nome da Rua:
                                    <input style="width: 350px" name="rua" class="form-control" type="text" placeholder="Nome da Rua">
                                </label>
                            </td>

                            <td >
                                <label>Nº da Casa:
                                    <input name="numerocasa" placeholder="XXXXX" class="form-control" type="text" onkeypress='return SN(event)' maxlength="5">
                                </label>
                            </td>
                        </tr>
                    </table>
                <br>

                <table>
                    <tr>
                        <td> 
                            <img src="Imagens/icons8-quarto-30" class="imgB" height="18px"/><!-- imagem ao lado do texto -->
                            Quantidade de Quartos:
                        </td>

                        <td>
                            <img src="Imagens/icons8-vaso-sanitário-40" class="imgB" height="20px"/>
                            Quantidade de Banheiros:
                        </td>

                        <td>
                            <img src="Imagens/icons8-sala-de-estar-24" class="imgB" height="19px"/>
							Quantidade de Sala:
                        </td>

                        <td>
                            <img src="Imagens/icons8-vaso-sanitário-40" value="0" class="imgB" height="20px"/>
							Quantidade de Suites:
                        </td>
                    </tr>

					<tr>
                        <td>
							<input name="qtquarto" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control">
						</td>

						<td>
							<input name="qtbanheiro" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control"> 
						</td>

						<td>
							<input name="qtsala" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control"> 
                        </td>
                        <td>
                            <input name="qtsuite" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control"> 
						</td>
                    </tr>

                    <tr>
                        <td>
                            <img src="Imagens/icons8-garagem-50" class="imgB" height="20px"/>
						    Quantidade de Garagem: 
                        </td>
                        <td>
                            <img src="Imagens/icons8-cozinha-50" class="imgB" height="20px"/>
                            Quantidade de Cozinha:
                        </td>

                        <td>
                            <img src="Imagens/icons8-churrasqueira-24" class="imgB" height="20px"/>
							Quantidade de Churrasqueira:
                        </td>

                        <td>
                            <img src="Imagens/icons8-casa-64.png" class="imgB" height="20px"/>
							Quantidade de Andares:
                        </td>
                    </tr>
                        
                    <tr>
                        <td>
                            <input name="qtgaragem" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control"> 
                        </td>

                        <td>
                            <input name="qtcozinha" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control">  
                        </td>

                        <td>
                            <input name="qtchurrasqueira" placeholder="XX" type='text' onkeypress='return SN(event)' maxlength="2" class="form-control">  
                        </td>

                        <td>
                        <input name="qtpiso" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control">  
                        </td>
                    </tr>
                </table>
            <br>
            
                <table>
                    <tr>
                        <td style="width: 23%;">
                            <img src="Imagens/icons8-alarme-30.png" class="imgB" height="20px"/>
                            Sistema de alarme:
                        </td>

                        <td style="width: 24%;">
                            <img src="Imagens/icons8-comida-24.png" class="imgB" height="20px"/>
                            Espaço gourmet:
                        </td>

                        <td style="width: 25%;">
                            <img src="Imagens/icons8-telefone-comercial-32.png" class="imgB" height="20px"/> 
                            Interfone:
                        </td>

                        <td style="width: 23%;">
                            <img src="Imagens/icons8-varanda-50.png" class="imgB" height="20px"/>
                            Varanda:
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label><!-- input do tipo radio, é um input q gera opção -->
                                <input type="radio" name="Sistemaalarme" value="Sim" class="btn-default.vermelho" />Sim
                                <br>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" name="Espacogourmet" value="Sim" class="btn-default.vermelho" />Sim
                                <br>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" name="Interfone" value="Sim" class="btn-default.vermelho" />Sim
                                <br>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" name="Varanda" value="Sim" class="btn-default.vermelho" />Sim
                                <br>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
				            <label><!-- checked = seleciona por padrão -->
                                <input checked="checked" type="radio" name="Sistemaalarme" value="Não" class="bn" />Não
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <input checked="checked" type="radio" name="Espacogourmet" value="Não" class="bn" />Não
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <input checked="checked" type="radio" name="Interfone" value="Não" class="bn" />Não
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <input checked="checked" type="radio" name="Varanda" value="Não" class="btn-default.vermelho" />Não
                                <br>
                            </label>
                        </td>
                    </tr>
                </table>
            <br>

                <table>
                    <tr>
                        <td>
                        <img src="Imagens/icons8-casa-24.png" class="imgB" height="19px"/>
                            Código da Casa:
                        </td>

                        <td>
                            Tamanho do Terreno:
                        </td>

                        <td>
                            <img src="Imagens/icons8-dinheiro-64.png" class="imgB" height="20px"/>
                            Valor do IPTU:
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input required name="codcasa" placeholder="XXXXXXXX" type='text' onkeypress='return SN(event)' maxlength="22" class="form-control">
                        </td>

                        <td>
                            <input required name="metro" placeholder="XXXm²" type='text' onkeypress='return SN(event)' maxlength="22" class="form-control">
                        </td>

                        <td>
                            <input required name="iptu" placeholder="XXX.XXX,00" OnKeyPress="FormataMoeda(this,10,event); return maskKeyPress(event)" type='text'  maxlength="10" class="form-control">
                        <td>
                    </tr>
                    
                </table>
            <br>

                <table>
                    <tr>
                        <td>
                            <img src="Imagens/icons8-casa-64.png" class="imgB" height="20px"/>
                            Casa Mobiliada:
                        </td>

                        <td>
                            <img src="Imagens/icons8-dinheiro-64.png" class="imgB" height="20px"/>
                            IPTU Pago:
                        </td>

                        <td>
                            <img src="Imagens/icons8-aperto-de-mão-50.png" class="imgB" height="20px"/>
                            Negociações:
                        </td>
                        
                        <td>
                            <img src="Imagens/icons8-casa-64.png" class="imgB" height="20px"/>
                           Tipo de Venda:
                        </td>

                        <td>
                            <img src="Imagens/icons8-casa-64.png" class="imgB" height="20px"/>
                            Tipo de Imóvel:
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>
                                <input type="radio" name="imobiliada" value="Sim" />Sim
                                <br>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" name="iptupago" value="Sim" />Sim
                                <br>
                            </label>
                        </td>
                        
                        <td>
                            <label>
                                <input type="radio" name="negociacao" value="Disponivel para Negociar" />Sim
                                <br>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" name="tipovenda" value="Alugar" />Alugar
                                <br>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" name="tipoimovel" value="Terreno" />Terreno
                                <br>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
				            <label>
                                <input checked="checked" type="radio" name="imobiliada" value="Não" />Não
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <input checked="checked" type="radio" name="iptupago" value="Não" />Não
                                <br>
                            </label>
                        </td>
                    
                        <td>
				            <label>
                                <input checked="checked" type="radio" name="negociacao" value="Indisponivel para Negociar" />Não
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <input checked="checked" type="radio" name="tipovenda" value="Venda" />Vender
                                <br>
                            </label>
                        </td>
                        
                        <td>
				            <label>
                                <input checked="checked" type="radio" name="tipoimovel" value="Casa" />Casa
                                <br>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
				            <label>
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <input type="radio" name="tipoimovel" value="Apartamento" />Apartamento
                                <br>
                            </label>
                        </td>
                        
                    </tr>               
                </table>
            <br>

                <table>
                    <tr>
                        <td>
                            <div class="input-group mb-3" >
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Posição Solar:</label>
                                </div>

                                <select name="posicaosolar">
                                    <option>Selecione</option>
                                    <option value="Norte">      Norte       </option>
                                    <option value="Sul">        Sul         </option>
                                    <option value="Leste">      Leste       </option>
                                    <option value="Oeste">      Oeste       </option>
                                    <option value="Nordeste">   Nordeste    </option>
                                    <option value="Sudeste">    Sudeste     </option>
                                    <option value="Noroeste">   Noroeste    </option>
                                    <option value="Sudoeste">   Sudoeste    </option>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
            <br>
            
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição</label><!-- area para texto longo -->
                    <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            <br>

                <table>
                    <tr>
                        <td> 
                            <img src="Imagens/icons8-pessoa-do-sexo-masculino-32" class="imgB" height="18px"/>
                            Nome do Proprietário:
                        </td>

                        <td>
                            <img src="Imagens/icons8-telefone-24" class="imgB" height="20px"/>
                            Telefone do Proprietário:
                        </td>
                    </tr>

					<tr>
                        <td>
							<input name="nomedono" type='text' class="form-control"> 
						</td>

						<td>
							<input name="teldono" maxlength="14" placeholder="(XX) X XXXX-XXXX" OnKeyPress="formatar('## # ####-####', this); return maskKeyPress(event)" type='text' class="form-control"> 
						</td>
                    </tr>
                </table>
<br><br>

                    <div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file"><!-- input do tipo file, serve para enviar arquivo(imagem) -->
                                <input type="file" required name="arquivo" class="custom-file-input" id="imp" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="imp">Selecione a imagem de capa da Casa</label>
                            </div>
                        </div>

                    <img id="img" style="width:150px" />
                    <script
                        src="https://code.jquery.com/jquery-3.2.1.min.js"
                        integrit="sha256-hwg4gsxgFZh0sEEamd0YGBf13FyQuiTwlAQgxVSNgt4="
                        crossrigin="anonymous">//está pegando scripts que estão em um servidor
                    </script>

                    <script>
                        $(function(){//essa é a parte que mostra a imagem que vai ser enviada
                            $('#imp').change(function(){//esta chamando a função q coloca  (change) a img q o filereader na tag <img id="img" style="width:150px" /> acima
                                const file = $(this)[0].files[0]
                                const fileReader = new FileReader()//chama o evento filereader, como proprio nome diz, leitor de arquivo
                                fileReader.onloadend = function(){
                                    $('#img').attr('src', fileReader.result)//adiciona o attr(atributo) na msm tag
                                }
                                    fileReader.readAsDataURL (file)
                                })
                            })
                    </script>
                </div>
            <br>
                <div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><!-- msm coisa 4x, para cada imput de imagem -->
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" required name="arquivodois" class="custom-file-input" id="imp2" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Selecione uma imagem da Casa</label>
                        </div>
                    </div>

                    <img id="img2" style="width:150px" />

                    <script>
                        $(function(){
                            $('#imp2').change(function(){
                                const file = $(this)[0].files[0]
                                const fileReader = new FileReader()
                                fileReader.onloadend = function(){
                                    $('#img2').attr('src', fileReader.result)
                                }
                                    fileReader.readAsDataURL (file)
                                })
                            })
                    </script>
                </div>
            <br>
                <div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" required name="arquivotres" class="custom-file-input" id="imp3" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="imp3">Selecione uma imagem da Casa</label>
                        </div>
                    </div>

                    <img id="img3" style="width:150px" />

                    <script>
                        $(function(){
                            $('#imp3').change(function(){
                                const file = $(this)[0].files[0]
                                const fileReader = new FileReader()
                                fileReader.onloadend = function(){
                                    $('#img3').attr('src', fileReader.result)
                                }
                                    fileReader.readAsDataURL (file)
                                })
                            })
                    </script>
                </div>
            <br>
                <div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" required name="arquivoquatro" class="custom-file-input" id="imp4" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="imp4">Selecione uma imagem da Casa</label>
                        </div>
                    </div>

                    <img id="img4" style="width:150px" />
                    <script
                        src="https://code.jquery.com/jquery-3.2.1.min.js"
                        integrit="sha256-hwg4gsxgFZh0sEEamd0YGBf13FyQuiTwlAQgxVSNgt4="
                        crossrigin="anonymous">

                    </script>

                    <script>
                        $(function(){
                            $('#imp4').change(function(){
                                const file = $(this)[0].files[0]
                                const fileReader = new FileReader()
                                fileReader.onloadend = function(){
                                    $('#img4').attr('src', fileReader.result)
                                }
                                    fileReader.readAsDataURL (file)
                                })
                            })
                    </script>
                </div>
                    <br><br>
                <button type="input" class="btn btn-outline-dark">Salvar</button>
                
                <div class="k">
                    <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/menu.php" >Voltar<<<<<<</a>
                </div>
            </form>
   
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        </BODY>
    </HTML>
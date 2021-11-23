<?php
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $dbname = "cadastrocasa";

//Criar a conexão 
  $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    $IDCasa = $_GET['id'];
  $consulta = "SELECT * FROM casas WHERE IDCasa = $IDCasa";

  $con = mysqli_query($conn, $consulta) or die ($mysqli->error);
?>
<!DOCTYPE HTML><!-- indica ao navegador que é um arquivo em html -->

    <HTML lang="pt-br"><!-- indica ao navegador a linguagem da pagina -->

        <HEAD><!-- aqui vão todas as propriedades da pagina -->

            <meta charset="utf-8"/> <!-- define o character como utf8 (letras maiusculas ou minusculas não tem diferença, isso é o utf8) -->

                <title>Alterar Casa</title><!-- titulo da pagina -->
            <!-- inclui o css que esta no servidor do bootstrap -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <!-- inclui o css que esta em outra pasta -->
            <link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/CSS/estilocadastro.css"><!-- rel = tipo do documento/ href é a localização do arquivo -->
            
            <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/avaScript/JScript.js"></script><!-- inclui o arquivo de java script/ src é a msm coisa q href -->
            
            <link rel="icon" type="imagem/png" href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/Imagens/icons8-home-64.png" /><!-- coloca o icone no titulo da pagina -->

        </HEAD>

        <BODY>
            <?php while ($dado = $con->fetch_array()){ ?>
            <form class="forma" method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/edita_pronto.php" enctype="multipart/form-data">
                <input type="hidden" name="ID" value="<?php echo $IDCasa ?>">

                <div class="input-group mb-3" >
                    <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Visivel na Home:</label>
                    </div>
                    <select name="visibilidade">
                        <option value="sim" <?php if ($dado['visibilidade'] == "sim") { echo "selected='selected'";} ?> >
                            Visivel
                        </option>
                        <option value="nao" <?php if ($dado['visibilidade'] == "nao") { echo "selected='selected'";} ?> >
                            Invisivel
                        </option>
                    </select>
                </div>

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
                                <input  name="titulo" value="<?php echo $dado['titulo'] ?>" class="form-control" type="text"  placeholder="Título da Casa">
                            </td>

                            <td><!-- msm cois / required = campo obrigatodio / onkeypress = evento caso uma tecla seja precionada, esta ligada ao arquivo de javascript / maxleght = limita a quantidade de caracter / aria-label e desbedby = tamanho do imput/css do bootstrap -->
                                <input required name="cep" value="<?php echo $dado['cep'] ?>" type="text" class="form-control" placeholder="00 000-000" OnKeyPress="formatar('## ###-###', this); return maskKeyPress(event)" maxlength="10" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </td>

                            <td>
                                <div class="input-group mb-3"><!-- div = são divisoes -->
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span> <!-- coloca esse simbolo na caixa ao lado do input -->
                                    </div><!-- msm coisa do outro input -->
                                    <input required name="valor" value="<?php echo $dado['valor']; ?>" type="text" maxlength="14" placeholder="XXX.XXX.XXX,00" OnKeyPress="FormataMoeda(this,10,event); return maskKeyPress(event)" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
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

                                    <Select required name="bairro" > <!-- campo de seleção -->
                                        <option>Selecione o Bairro</option>
                                        <option value="Alto Arroio" <?php if ($dado['bairro'] == "Alto Arroio") { echo "selected='selected'";} ?> >
                                        Alto Arroio                     </option><!-- cada opção -->

                                        <option value="Araçatuba" <?php if ($dado['bairro'] == "Araçatuba") {echo "selected='selected'";} ?> >
                                        Araçatuba                       </option>

                                        <option value="Arroio" <?php if ($dado['bairro'] == "Arroio") {echo "selected='selected'";}; ?> > 
                                        Arroio                          </option>

                                        <option value="Arroio do Rosa" <?php if ($dado['bairro'] == "Arroi do Rosa") {echo "selected='selected'";}; ?> >
                                        Arroio do Rosa                  </option>

                                        <option value="Barra da Ibiraquera" <?php if ($dado['bairro'] == "Barra da Ibiraquera") {echo "selected='selected'";}; ?> >     
                                        Barra da Ibiraquera             </option>

                                        <option value="Boa Vista" <?php if ($dado['bairro'] == "Boa Vista") {echo "selected='selected'";}; ?> >          
                                        Boa Vista                       </option>

                                        <option value="Penha" <?php if ($dado['bairro'] == "Penha") {echo "selected='selected'";}; ?> >
                                        Penha                           </option>

                                        <option value="Campestre" <?php if ($dado['bairro'] == "Campestre") {echo "selected='selected'";}; ?> > 
                                        Campestre                       </option>

                                        <option value="Campo d'Aviação" <?php if ($dado['bairro'] == "Campo d´Aviação") {echo "selected='selected'";}; ?>>
                                        Campo d'Aviação                 </option>

                                        <option value="Campo d'Una" <?php if ($dado['bairro'] == "Campo d´Una") {echo "selected='selected'";}; ?> >
                                        Campo d'Una                     </option>

                                        <option value="Centro" <?php if ($dado['bairro'] == "Centro") {echo "selected='selected'";}; ?> > 
                                        Centro                          </option>

                                        <option value="Guaíuba" <?php if ($dado['bairro'] == "Guaíuba") {echo "selected='selected'";}; ?> >
                                        Guaíuba                         </option>

                                        <option value="Itapirubá" <?php if ($dado['bairro'] == "Itapirubá") {echo "selected='selected'";}; ?> >
                                        Itapirubá                       </option>

                                        <option value="Itapirubá SUL" <?php if ($dado['bairro'] == "Itapirubá SUL") {echo "selected='selected'";}; ?> >   Itapirubá SUL                   </option>

                                        <option value="Itapirubá NORTE" <?php if ($dado['bairro'] == "Itapirubá NORTE") {echo "selected='selected'";}; ?>>
                                        Itapirubá NORTE                 </option>

                                        <option value="Mirim" <?php if ($dado['bairro'] == "Mirim") {echo "selected";}; ?> >
                                        Mirim                           </option>

                                        <option value="Morro do Mirim" <?php if ($dado['bairro'] == "Morro do Mirim") {echo "selected='selected'";}; ?> > Morro do Mirim                  </option>

                                        <option value="Nova Brasília" <?php if ($dado['bairro'] == "Nova Brasília") {echo "selected='selected'";}; ?> >  
                                        Nova Brasília                   </option>

                                        <option value="Paes Leme" <?php if ($dado['bairro'] == "Paes Leme") {echo "selected='selected'";}; ?> >			
                                        Paes Leme						</option>

                                        <option value="Porto da Vila" <?php if ($dado['bairro'] == "APorto da Vila") {echo "selected='selected'";}; ?> >
                                        Porto da Vila                   </option>

                                        <option value="Ribanceira" <?php if ($dado['bairro'] == "Ribanceira") {echo "selected='selected'";}; ?> >
                                        Ribanceira						</option>

                                        <option value="Roça Grande" <?php if ($dado['bairro'] == "Roça Grande") {echo "selected='selected'";}; ?> >
                                        Roça Grande                     </option>

                                        <option value="Sagrada Família" <?php if ($dado['bairro'] == "Sagrada Família") {echo "selected='selected'";}; ?> >
                                        Sagrada Família                 </option>

                                        <option value="Village" <?php if ($dado['bairro'] == "Village") {echo "selected='selected'";}; ?> >	
                                        Village							</option>

                                        <option value="Vila Alvorada" <?php if ($dado['bairro'] == "Vila alvorada") {echo "selected='selected'";}; ?> >	
                                        Vila Alvorada (Praia da Aguada)	</option>

                                        <option value="Vila Nova Alvorada" <?php if ($dado['bairro'] == "Vila Nova Alvorada") {echo "selected='selected'";}; ?> >
                                        Vila Nova Alvorada (Divinéia)	</option>

                                        <option value="Vila Esperança" <?php if ($dado['bairro'] == "Vila Esperança") {echo "selected='selected'";}; ?> >
                                        Vila Esperança					</option>

                                        <option value="São Tomás" <?php if ($dado['bairro'] == "São Tomás") {echo "selected='selected'";}; ?> > 
                                        São Tomás                       </option>

                                        <option value="Sambaqui" <?php if ($dado['bairro'] == "Sambaqui") {echo "selected='selected'";}; ?> >
                                        Sambaqui                         </option>

                                        <option value="Vila Nova" <?php if ($dado['bairro'] == "Vila Nova") {echo "selected='selected'";}; ?> >			
                                        Vila Nova						</option>

                                        <option value="Vila Santo Antônio" <?php if ($dado['bairro'] == "Vila Santo Antônio") {echo "selected='selected'";}; ?> >		
                                        Vila Santo Antônio				</option>  
                                    </select>
                                </div>
                            </td>
                            <td >
                                <label>Nome da Rua:
                                    <input style="width: 350px" name="rua" value="<?php echo $dado['rua'] ?>" class="form-control" type="text" placeholder="Nome da Rua">
                                </label>
                            </td>

                            <td >
                                <label>Nº da Casa:
                                    <input name="numerocasa" value="<?php echo $dado['numerocasa'] ?>" placeholder="XXXXX" class="form-control" type="text" onkeypress='return SN(event)' maxlength="5">
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
							<input name="qtquarto" value="<?php echo $dado['qtquarto'] ?>" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control">
						</td>

						<td>
							<input name="qtbanheiro" value="<?php echo $dado['qtbanheiro'] ?>" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control"> 
						</td>

						<td>
							<input name="qtsala" value="<?php echo $dado['qtsala'] ?>" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control"> 
                        </td>
                        <td>
                            <input name="qtsuite" value="<?php echo $dado['qtsuite'] ?>" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control"> 
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
                            <input name="qtgaragem" value="<?php echo $dado['qtgaragem'] ?>" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control"> 
                        </td>

                        <td>
                            <input name="qtcozinha" value="<?php echo $dado['qtcozinha'] ?>" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control">  
                        </td>

                        <td>
                            <input name="qtchurrasqueira" value="<?php echo $dado['qtchurrasqueira'] ?>" placeholder="XX" type='text' onkeypress='return SN(event)' maxlength="2" class="form-control">  
                        </td>

                        <td>
                        <input name="qtpiso" value="<?php echo $dado['qtpiso'] ?>" type='text' placeholder="XX" onkeypress='return SN(event)' maxlength="2" class="form-control">  
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
                                <input type="radio" <?php if ($dado['Sistemaalarme'] == "Sim") {echo "checked==\"checked\"";} ?> name="Sistemaalarme" value="Sim" class="btn-default.vermelho" />Sim
                                <br>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" <?php if ($dado['Espacogourmet'] == "Sim") {echo "checked=\"checked\"";} ?> name="Espacogourmet" value="Sim" class="btn-default.vermelho" />Sim
                                <br>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" <?php if ($dado['Interfone'] == "Sim") {echo "checked=\"checked\"";} ?> name="Interfone" value="Sim" class="btn-default.vermelho" />Sim
                                <br>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" <?php if ($dado['Varanda'] == "Sim") {echo "checked=\"checked\"";} ?> name="Varanda" value="Sim" class="btn-default.vermelho" />Sim
                                <br>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
				            <label><!-- checked = seleciona por padrão -->
                                <input <?php if ($dado['Sistemaalarme'] == "Não") {echo "checked=\"checked\"";} ?> type="radio" name="Sistemaalarme" value="Não" class="bn" />Não
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <input <?php if ($dado['Espacogourmet'] == "Não") {echo "checked=\"checked\"";} ?> type="radio" name="Espacogourmet" value="Não" class="bn" />Não
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <input <?php if ($dado['Interfone'] == "Não") {echo "checked=\"checked\"";} ?> type="radio" name="Interfone" value="Não" class="bn" />Não
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <input <?php if ($dado['Varanda'] == "Não") {echo "checked=\"checked\"";} ?> type="radio" name="Varanda" value="Não" class="btn-default.vermelho" />Não
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
                            <input required name="codcasa" value="<?php echo $dado['codcasa'] ?>" placeholder="XXXXXXXX" type='text' onkeypress='return SN(event)' maxlength="22" class="form-control">
                        </td>

                        <td>
                            <input required name="metro" value="<?php echo $dado['metro'] ?>" placeholder="XXXm²" type='text' onkeypress='return SN(event)' maxlength="22" class="form-control">
                        </td>

                        <td>
                            <input required name="iptu" value="<?php echo $dado['iptu'] ?>" placeholder="XXX.XXX,00" OnKeyPress="FormataMoeda(this,10,event); return maskKeyPress(event)" type='text'  maxlength="10" class="form-control">
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
                                <input type="radio" <?php if ($dado['imobiliada'] == "Sim") {echo "checked=\"checked\"";} ?> name="imobiliada" value="Sim" />Sim
                                <br>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" <?php if ($dado['iptupago'] == "Sim") {echo "checked=\"checked\"";} ?> name="iptupago" value="Sim" />
                                Sim
                                <br>
                            </label>
                        </td>
                        
                        <td>
                            <label>
                                <input type="radio" <?php if ($dado['negociacao'] == "Disponivel para Negociar") {echo "checked=\"checked\"";} ?> name="negociacao" value="Disponivel para Negociar" />Sim
                                <br>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" <?php if ($dado['tipovenda'] == "Alugar") {echo "checked=\"checked\"";} ?> name="tipovenda" value="Alugar" />Alugar
                                <br>
                            </label>
                        </td>

                        <td>
                            <label>
                                <input type="radio" <?php if ($dado['tipoimovel'] == "Terreno") {echo "checked=\"checked\"";} ?> name="tipoimovel" value="Terreno" />Terreno
                                <br>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
				            <label>
                                <input <?php if ($dado['imobiliada'] == "Não") {echo "checked=\"checked\"";} ?> type="radio" name="imobiliada" value="Não" />Não
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <input <?php if ($dado['iptupago'] == "Não") {echo "checked=\"checked\"";} ?> type="radio" name="iptupago" value="Não" />Não
                                <br>
                            </label>
                        </td>
                    
                        <td>
				            <label>
                                <input <?php if ($dado['negociacao'] == "Indisponivel para Negociar") {echo "checked=\"checked\"";} ?> type="radio" name="negociacao" value="Indisponivel para Negociar" />Não
                                <br>
                            </label>
                        </td>

                        <td>
				            <label>
                                <input <?php if ($dado['tipovenda'] == "Venda") {echo "checked=\"checked\"";} ?> type="radio" name="tipovenda" value="Venda" />Vender
                                <br>
                            </label>
                        </td>
                        
                        <td>
				            <label>
                                <input <?php if ($dado['tipoimovel'] == "Casa") {echo "checked=\"checked\"";} ?> type="radio" name="tipoimovel" value="Casa" />Casa
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
                                <input type="radio" <?php if ($dado['tipoimovel'] == "Apartamento") {echo "checked=\"checked\"";} ?> name="tipoimovel" value="Apartamento" />Apartamento
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
                                    <option value="Norte"       <?php if ($dado['posicaosolar'] == "Norte") {echo "selected='selected'";}; ?> >      
                                    Norte       </option>
                                    <option value="Sul"         <?php if ($dado['posicaosolar'] == "Sul") {echo "selected='selected'";}; ?> >        
                                    Sul         </option>
                                    <option value="Leste"       <?php if ($dado['posicaosolar'] == "Leste") {echo "selected='selected'";}; ?> >      
                                    Leste       </option>
                                    <option value="Oeste"       <?php if ($dado['posicaosolar'] == "Oeste") {echo "selected='selected'";}; ?> >      
                                    Oeste       </option>
                                    <option value="Nordeste"    <?php if ($dado['posicaosolar'] == "Nordeste") {echo "selected='selected'";}; ?> >   
                                    Nordeste    </option>
                                    <option value="Sudeste"     <?php if ($dado['posicaosolar'] == "Sudeste") {echo "selected='selected'";}; ?> >    
                                    Sudeste     </option>
                                    <option value="Noroeste"    <?php if ($dado['posicaosolar'] == "Noroeste") {echo "selected='selected'";}; ?> >   
                                    Noroeste    </option>
                                    <option value="Sudoeste"    <?php if ($dado['posicaosolar'] == "Sudoeste") {echo "selected='selected'";}; ?> >   
                                    Sudoeste    </option>
                                </select>
                            </div>
                        </td> 
                    </tr>
                </table>
            <br>
            
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição</label><!-- area para texto longo -->
                    <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3"><?php echo $dado['descricao']; ?></textarea>
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
							<input name="nomedono" value="<?php echo $dado['nomedono'] ?>" type='text' class="form-control"> 
						</td>

						<td>
							<input name="teldono" value="<?php echo $dado['teldono'] ?>" maxlength="14" placeholder="(XX) X XXXX-XXXX" OnKeyPress="formatar('## # ####-####', this); return maskKeyPress(event)" type='text' class="form-control"> 
						</td>
                    </tr>
                </table>
<br><br>
                <?php  }  ?>
                    
                    
                <button type="input" class="btn btn-outline-dark">Editar</button>
                
                <div class="LOL">
                    <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/TCCnovo/administrador/menu.php" >Voltar<<<<<<</a>
                </div>
            </form>
   
            

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        </BODY>
    </HTML>
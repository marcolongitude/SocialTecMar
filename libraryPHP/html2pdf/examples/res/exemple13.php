<div class="tabela">
							
						<table >
							<tr class="titulos">
								<td width="550">Nome Cliente</td>
								<td width="200">Telefone Cliente</td>
								<td width="450">Email Cliente</td>
								<td width="200">Ações</td>
							</tr>
							
							
							<?php
																
								$host = 'localhost';
								$user = 'root';
								$password = 'admin';
								$database = 'OSbanco';
	
								$conexao = mysqli_connect($host, $user, $password, $database)
									or die ('Erro de conexao com banco de dados');
		
								$sql = "SELECT id_cliente,nome_cliente,tel_cliente,email_cliente FROM Cliente ORDER BY id_cliente desc";
								
								$result = mysqli_query($conexao, $sql)
									or die ('erro de pesquisa de dados no banco');
		
								while ($row = mysqli_fetch_array($result))
								{
							?>
							<tr class="dados">
								<td><?php echo $row['nome_cliente'];?></td>
								<td class="tel"><?php echo $row['tel_cliente'];?></td>
								<td><?php echo $row['email_cliente'];?></td>
								<td><a href="CadOS.php?nome_cliente=<?php echo $row['nome_cliente'];?>&id_cliente=<?php echo $row['id_cliente'];?>">Insere</a></td>
															
							</tr>
							<?php }
								mysqli_close($conexao);
							?>
						</table>
						
					</div>

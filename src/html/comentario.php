<?php
      require_once __DIR__.'/../sql/sql.php';
      require_once __DIR__ . '/../php/postagem.php';
      require_once __DIR__ . '/../php/comentario.php';


      
     
  
    //pegar todas as postagens e retornar em formato json
    //$sql = new Sql();
    //$result = $sql->select("SELECT * FROM tb_comentario ORDER BY tempo desc");
?>
    <?php




//ainda não mudei aqui embaixo
    $sql = new Sql();
    $query ="SELECT    tc.idcomentario,tc.comentario_texto, tc.curtida, tc.idusuario,
                       tc.comentario_tempo, 
                       tuc.nome nomep, date_format(tc.comentario_tempo, '%d/%m/%Y %H:%i') tempoc
                       
             FROM      tb_comentario tc
             
             
             left join tb_usuarios   tuc on tuc.id = tc.idusuario
             ORDER BY  tc.comentario_tempo ";
    $result = $sql->select($query);



foreach($result as $row){
                                                
                                            ?>
                                            
                                            <div role="main" class="main">
				
			<!--INÍCIO DOS POSTS-->
				<div class="container container-fluid">
					
					<div class="row mt-5 pt-3">
						<div class="col-md-12">
							<div class="blog-posts">
								
              

									<div class="post-content">
										<!--NOME DOS POSTS-->
									
										
										<?php
										echo "<h4>".$row['comentario_texto']."</h4>";
                    ?>
										<div class="post-meta">
                      <?php
                      $nomeusuariop= $row['nomep'];
                      $idusuario= $row['idusuario'];
                      echo "<span><i class='far fa-user'></i> $nomeusuariop </span>";
											
										  echo "<span><i class= 'far fa-comments'></i> " .$row['tempoc']."</span>";
                      
                      

                       if($user_->isAdmin() ||( $user['id'] == $idusuario)  )
                       {  
                         echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-danger' href='html/deletar_comentario.php?id=".$row['idcomentario']."'>Deletar Comentário"."</a>";
                       }
                       if( $user['id'] == $idusuario)  
                       {  
                         echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-warning' href='html/editar_comentario.php?id=".$row['idcomentario']."'>Editar Comentário"."</a>";
                       }
                       echo "<hr>";
										?>
										</div>

									</div>
								</article>
								
								<!--número de páginas (separador de páginas)-->



<!--
								<ul class="pagination float-right">
									<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
								</ul>
-->
							</div>
						</div>
						
					</div>

				</div>
			</div>
                 <?php
                 }
                 ?>    
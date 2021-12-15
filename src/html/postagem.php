<?php
      require_once __DIR__.'/../sql/sql.php';
      require_once __DIR__ . '/../php/postagem.php';
      date_default_timezone_set('America/Sao_Paulo');
      
      
  ?>
      <div class="container container-fluid">
      
      <div class="row mt-5 pt-3">
        <div class="col-md-12">
          <div class="blog-posts">
            
          <a class='btn' style="background-color: paleturquoise;" href='html/adicionar_postagem.php'>Adicionar Postagem</a>
          </div>
        </div>
      </div>
      </div>

<?php




//QUERY DAS POSTAGENS
    $sql = new Sql();
    $query ="SELECT    tp.idpostagem,tp.postagem_texto, tp.curtida, tp.idusuario,
                       tp.postagem_tempo, 
                       tup.nome nomep, date_format(tp.postagem_tempo, '%d/%m/%Y %H:%i') tempop
                       
             FROM      tb_postagens tp
             
             
             left join tb_usuarios   tup on tup.id = tp.idusuario
             ORDER BY  tp.postagem_tempo desc";
    $result = $sql->select($query);



foreach($result as $row){
                                                
                                            ?>
                                            
                                            <div role="main" class="main">
				
			<!--CONTEÚDO DO POST-->
				<div class="container container-fluid">
					
					<div class="row mt-5 pt-3">
						<div class="col-md-12">
							<div class="blog-posts">
								
              

									<div class="post-content">
									
									
										
										<?php
										echo "<h4>".$row['postagem_texto']."</h4>";
                    ?>
										<div class="post-meta">
                      <?php
                      $nomeusuariop= $row['nomep'];
                      $idusuario= $row['idusuario'];
                      $idpostagem = $row['idpostagem'];
                      $curtida = $row['curtida'];
                      
                      echo "<span><i class='far fa-user'></i> $nomeusuariop </span>";
                      
											
										  echo "<span><i class= 'far fa-comments'></i> " .$row['tempop']."</span>";
                      
                      echo "&nbsp;&nbsp;&nbsp;<a class='btn' style ='background-color: paleturquoise;'href='html/adicionar_comentario.php?id=".$row['idpostagem']."'>Comentar"."</a>";

                       if($user_->isAdmin() ||( $user['id'] == $idusuario)  )
                       {  
                         echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-danger' href='html/deletar_postagem.php?id=".$row['idpostagem']."'>Apagar Postagem"."</a>";
                       }
                       if( $user['id'] == $idusuario)  
                       {  
                         echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-warning' href='html/editar_postagem.php?id=".$row['idpostagem']."'>Editar"."</a>";
                       }
                       echo "&nbsp;&nbsp;&nbsp;<a class='far fa-heart' href='html/curtir_postagem.php?id=".$row['idpostagem']."'>"."</a>";
                       echo " $curtida";




//QUERY DOS COMENTARIOS
                       $query_comentario ="SELECT    tc.idcomentario,tc.comentario_texto, tc.curtida, tc.idusuario,
                       tc.comentario_tempo, 
                       tuc.nome nomep, date_format(tc.comentario_tempo, '%d/%m/%Y %H:%i') tempoc
                       
             FROM      tb_comentario tc

             left join tb_usuarios   tuc on tuc.id = tc.idusuario
             WHERE tc.idpostagem = $idpostagem
             ORDER BY  tc.comentario_tempo ";
    $result_comentario = $sql->select($query_comentario);

    foreach($result_comentario as $row_comentario){
      ?>

      <!--INÍCIO DOS POSTS-->
      <div class="container container-fluid">
        
        <div class="row mt-5 pt-3">
          <div class="col-md-12">
            <div class="blog-posts">
              
            

                <div class="post-content">
                  <!--NOME DOS POSTS-->
                
                  
                  <?php
                  echo "<h5>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp".$row_comentario['comentario_texto']."</h5>";
                  ?>
                  <div class="post-meta">
                    <?php
                    $nomeusuariop= $row_comentario['nomep'];
                    $idusuario= $row_comentario['idusuario'];
                    $curtida = $row_comentario['curtida'];
                    echo "&nbsp;&nbsp;&nbsp<span><i class='far fa-user'></i> $nomeusuariop </span>";
                    
                    echo "<span><i class= 'far fa-comments'></i> " .$row_comentario['tempoc']."</span>";
                    if($user_->isAdmin() ||( $user['id'] == $idusuario)  )
                       {  
                         echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-danger' href='html/deletar_comentario.php?id=".$row_comentario['idcomentario']."'>Apagar Comentário"."</a>";
                       }
                       if( $user['id'] == $idusuario)  
                       {  
                         echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-warning' href='html/editar_comentario.php?id=".$row_comentario['idcomentario']."'>Editar Comentário"."</a>";
                       }
                       echo "&nbsp;&nbsp;&nbsp;<a class='far fa-heart' href='html/curtir_comentario.php?id=".$row_comentario['idcomentario']."&idpostagem=".$idpostagem."'>"."</a>";
                       
                       echo " $curtida";
                    

                  ?>
                  </div>

                </div>
              </article>
              
            




            </div>
          </div>
          
        </div>

      </div>

    
    <?php
    }
                       echo "<hr>";
										?>
										</div>

									</div>
								</article>
								
							
							</div>
						</div>
						
					</div>

				</div>
			</div>
                 <?php
                 
                }
                 ?>                          

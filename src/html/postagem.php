<?php
      require_once __DIR__.'/../sql/sql.php';
      require_once __DIR__ . '/../php/postagem.php';

      
      
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
				
			<!--INÍCIO DOS POSTS-->
				<div class="container container-fluid">
					
					<div class="row mt-5 pt-3">
						<div class="col-md-12">
							<div class="blog-posts">
								
              

									<div class="post-content">
										<!--NOME DOS POSTS-->
									
										
										<?php
										echo "<h4>".$row['postagem_texto']."</h4>";
                    ?>
										<div class="post-meta">
                      <?php
                      $nomeusuariop= $row['nomep'];
                      $idusuario= $row['idusuario'];
                      $idpostagem = $row['idpostagem'];
                      echo "<span><i class='far fa-user'></i> $nomeusuariop </span>";
											
										  echo "<span><i class= 'far fa-comments'></i> " .$row['tempop']."</span>";
                      
                      echo "&nbsp;&nbsp;&nbsp;<a class='btn' style ='background-color: paleturquoise;'href='html/adicionar_comentario.php?id=".$row['idpostagem']."'>Adicionar Comentário"."</a>";

                       if($user_->isAdmin() ||( $user['id'] == $idusuario)  )
                       {  
                         echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-danger' href='html/deletar_postagem.php?id=".$row['idpostagem']."'>Deletar Postagem"."</a>";
                       }
                       if( $user['id'] == $idusuario)  
                       {  
                         echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-warning' href='html/editar_postagem.php?id=".$row['idpostagem']."'>Editar Postagem"."</a>";
                       }


//////////////////////////////////////////////////////////////////////


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
                    echo "&nbsp;&nbsp;&nbsp<span><i class='far fa-user'></i> $nomeusuariop </span>";
                    
                    echo "<span><i class= 'far fa-comments'></i> " .$row_comentario['tempoc']."</span>";
                    if($user_->isAdmin() ||( $user['id'] == $idusuario)  )
                       {  
                         echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-danger' href='html/deletar_comentario.php?id=".$row_comentario['idcomentario']."'>Deletar Comentário"."</a>";
                       }
                       if( $user['id'] == $idusuario)  
                       {  
                         echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-warning' href='html/editar_comentario.php?id=".$row_comentario['idcomentario']."'>Editar Comentário"."</a>";
                       }
                    
/*
                     if($user_->isAdmin() ||( $user['id'] == $idusuario)  )
                     {  
                       echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-danger' href='html/deletar_comentario.php?id=".$row_comentario['idcomentario']."'>Deletar Comentário"."</a>";
                     }
                     if( $user['id'] == $idusuario)  
                     {  
                       echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-warning' href='html/editar_comentario.php?id=".$row_comentario['idcomentario']."'>Editar Comentário"."</a>";
                     }
                     */
                     
                    //echo "</div> </div> </article> </div></div></div> </div>";
                     
                     
                     //echo "<hr>";
                  ?>
                  </div>

                </div>
              </article>
              
              <!--número de páginas (separador de páginas)-->




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

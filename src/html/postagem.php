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
                      echo "<span><i class='far fa-user'></i> $nomeusuariop </span>";
											
										  echo "<span><i class= 'far fa-comments'></i> " .$row['tempop']."</span>";
                      


                       if($user_->isAdmin() ||( $user['id'] == $idusuario)  )
                       {  
                         echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-danger' href='html/deletar_postagem.php?id=".$row['idpostagem']."'>Deletar Postagem"."</a>";
                       }
                       if( $user['id'] == $idusuario)  
                       {  
                         echo "&nbsp;&nbsp;&nbsp;<a class='btn btn-warning' href='html/editar_postagem.php?id=".$row['idpostagem']."'>Editar Postagem"."</a>";
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

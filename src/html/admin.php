<div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter ">
                            <div class="sales report">
                           
                                    <table class="table table-hover table-dark">
                                        <thead>
                                            <tr>
                                            <th scope="col">#ID</th>
                                            <th scope="col">NOME</th>
                                            <th scope="col">E-MAIL</th>
                                            <th scope="col">EDITAR USUÁRIO</th>
                                            <th scope="col">CONCEDER PRIVILÉGIO</th>
                                            <th scope="col">DELETAR </th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                        <?php
                                            include __DIR__."/../sql/sql.php";
                                            $sql = new Sql();
                                            $query = "SELECT * FROM tb_usuarios";
                                            
                                            foreach($sql->select($query) as $row){
                                                echo "<tr>";
                                                echo "<td>".$row['id']."</td>";
                                                echo "<td>".$row['nome']."</td>";
                                                echo "<td>".$row['email']."</td>";
                                                echo "<td><a class='btn text-white' style='background-color:#FCA311;' href='editar.php?id=".$row['id']."'>Editar Usuário"."</a></td>";
                                                echo "<td><a class='btn text-white' style='background-color:#FCA311;' href='editar-privilegio.php?id=".$row['id']."'>Editar Privilégio"."</a></td>";
                                                echo "<td><a class='btn btn-danger' href='deletar.php?id=".$row['id']."'>Deletar Usuário"."</a></td>";
                                            }
                                         ?>


                                        </tbody>
                                        </table>
                            </div>
                        </div>
                    </div>
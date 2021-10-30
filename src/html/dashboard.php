<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="/css/dashboard.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">





<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
               
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Início</span></a></li>
                        <li><a href="/"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Voltar P/ Site</span></a></li>
                        <li><a href="/html/desconectar.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Desconectar</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                  
                     
                    </header>
                </div>
                <div class="user-dashboard">
                    <h1>Olá, Usuário</h1>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 gutter ">
                            <div class="sales report">
                           
                                    <table class="table table-hover table-dark">
                                        <thead>
                                            <tr>
                                            <th scope="col">#ID</th>
                                            <th scope="col">NOME</th>
                                            <th scope="col">E-MAIL</th>
                                            <th scope="col">SENHA</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                        <?php
                                            include $_SERVER['DOCUMENT_ROOT']."/sql/sql.php";
                                            $sql = new Sql();
                                            $query = "SELECT * FROM tb_usuarios";
                                            
                                            foreach($sql->select($query) as $row){
                                                echo "<tr>";
                                                echo "<td>".$row['id']."</td>";
                                                echo "<td>".$row['nome']."</td>";
                                                echo "<td>".$row['email']."</td>";
                                                echo "<td>".$row['senha']."</td>";
                                                echo "</tr>";
                                            }
                                         ?>


                                        </tbody>
                                        </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

<script>
    $(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});

</script>



 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <div class="container" class="text-center">
    <div class="col-md-10 col-md-offset-3">
    <div class="form-horizontal" style="">

<?php if(empty($data)){ ?>
       
       <br> <h2>Formulario-Registrar </h2><br>
            <form action="index.php?m=get_datosE" method="post">
            <?php } ?>
            <?php  if(!empty($data)){ ?>

        <br><h2>Formulario-Editar</h2>

             
    <form action="index.php?m=get_datosE&id=<?php echo $data['id'];?>" method="post" >
             <?php } ?>
                      
                        <div class="form-group row"> 
                        <label class="col-sm-2 col-form-label" >Name</label>
                        <div class="col-sm-5">
                        <input type="text"  class="form-control" name="name" value="<?php if(!empty($data)){ echo $data['name']; }?>">
                        </div></div>
                        <div class="form-group row">        
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-5">
                        <input type="text"  class="form-control" name="email" value="<?php if(!empty($data)){ echo $data['email']; }?>">
                         </div></div>
                         <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-5">
                        <input type="text" class="form-control" name="phone" value="<?php if(!empty($data)){ echo $data['phone']; }?>">
                        </div></div>
                       <input type="hidden" name="id" value="<?php if(!empty($data)){  echo $data['id'];} ?>">
                    
                    <?php if(empty($data)){ ?>
                        <input type="submit" class="btn btn-success" name="" value="Registrar">
                    <?php }  ?>
                    <?php if(!empty($data)){ ?>
                    <input type="submit" class="btn btn-success " name="" value="Guardar cambios">
                    <?php }  ?>
                </form>


</div>
    </div>
    
</div>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script>
    var check_modal_imagen = "<?php if($errors->get('nombre') || $errors->get('imagen') || $errors->get('orden')){ echo "true"; } ?>";
    var check_modal_servicios = "<?php if($errors->get('nombre_servicio')){ echo "true"; } ?>";
    var check_modal_promociones = "<?php if($errors->get('nombre_promocion') || $errors->get('precio_promocion') || $errors->get('precio_oferta_promocion') || $errors->get('servicios')){ echo "true"; } ?>";
    
    //const modalUpdate = new Modal(document.getElementById('updateProductModal'), null).show();
    //const modalDelete = new Modal(document.getElementById('deleteModal'), null).show();
    //const modalCreate = new Modal(document.getElementById('createProductModal'), null).show();
    

    
</script>
</body>
</html>
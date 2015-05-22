<section role="main" id="main">
    <noscript class="message black-gradient simpler">Your browser does not support JavaScript! Some features won't work as expected...</noscript>

    <hgroup id="main-title" class="thin">
        <h1>Editar ruta</h1>
    </hgroup>
    <?php echo $this->Form->create('Ruta', array('id'=>'formID'));?>
        <div class="with-padding"> 

        <div class="columns">

            <div class="new-row six-columns">

                <p class="block-label button-height">
                    <label for="block-label-1" class="label">Nombre <small>(requerido)</small></label>                    
                    <?php echo $this->Form->text('nombre', array('class' => 'input full-width', 'placeholder' => 'Ingrese el nombre de la ruta')); ?>
                </p>
            </div>
            <div class="six-columns">
                <p class="block-label button-height">
                    <label for="block-label-2" class="label">Codigo de Ruta<small>(Requerido)</small></label>
                    <?php echo $this->Form->text('cod_ruta', array('class'=>'input full-width', 'placeholder'=>'Ingresar codigo de ruta'));?>
                </p>
            </div>
            <div class=" new-row twelve-columns">                
                <p class="block-label button-height">
                    <label for="block-label-2" class="label">Descripcion<small>(requerido)</small></label>
                    <?php echo $this->Form->textarea('descripcion', array('class' => 'input full-width autoexpanding','style'=>'overflow: hidden; resize: none; height: 50px;' ,'placeholder' => 'Descripcion')); ?>
                </p>  
            </div>
            
            <div class="new-row six-columns">

                    <button type="submit" class="button glossy mid-margin-right" onClick="javascript:verificar()">
                        <span class="button-icon"><span class="icon-tick"></span></span>
                        Guardar
                    </button>

                    <button type="submit" class="button glossy">
                        <span class="button-icon red-gradient"><span class="icon-cross-round"></span></span>
                        Cancelar
                    </button>

                </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function(){$("#formID").validationEngine();});
</script>
<?php echo $this->element('sidebar/administrador');?>
<?php echo e(Form::open(array('url'=>'document-upload','method'=>'post', 'enctype' => "multipart/form-data"))); ?>

<div class="modal-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <?php echo e(Form::label('name',__('Name'),['class'=>'form-label'])); ?>

                <?php echo e(Form::text('name',null,array('class'=>'form-control','required'=>'required'))); ?>

            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <?php echo e(Form::label('role',__('Role'),['class'=>'form-label'])); ?>

                <?php echo e(Form::select('role',$roles,null,array('class'=>'form-control select'))); ?>

            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <?php echo e(Form::label('description', __('Description'),['class'=>'form-label'])); ?>

                <?php echo e(Form::textarea('description',null, array('class' => 'form-control' ,'rows'=> 3))); ?>

            </div>
        </div>

        <div class="col-md-6 form-group">
            <?php echo e(Form::label('document',__('Document'),['class'=>'form-label'])); ?>

            <div class="choose-file ">
                <label for="document" class="form-label">
                    <input type="file" class="form-control" name="document" id="document" data-filename="document_create" required>
                    <img id="image" class="mt-3" style="width:25%;"/>
                </label>
            </div>
        </div>


    </div>
</div>
<div class="modal-footer">

    <input type="button" value="<?php echo e(__('Cancel')); ?>" class="btn btn-light" data-bs-dismiss="modal">
    <input type="submit" value="<?php echo e(__('Create')); ?>" class="btn  btn-primary">
</div>
<?php echo e(Form::close()); ?>



<script>
    document.getElementById('document').onchange = function () {
        var src = URL.createObjectURL(this.files[0])
        document.getElementById('image').src = src
    }
</script>

<?php /**PATH /home/ninthsoft/public_html/erp.ninthsoft.com/resources/views/documentUpload/create.blade.php ENDPATH**/ ?>
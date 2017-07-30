
<div class="content-wrapper">
    <section class="content-header">
        <h1><?=$title?></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin Panel</a></li>
            <li class="active"><?=$title?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- form row -->
        <div class="row">
            <div class="col-md-12">
                <!-- box -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><?=$title?> form</h3>
                    </div><!-- /.box-header -->
                    <!-- form -->
                    <?=form_open(site_url("admin_panel/do_edit_pricing"), array("class" => "form-horizontal"))?>
                        <div class="box-body">
                            <!-- name -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Package name <sup>*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Name" name="name" value="<?=$list[0]->name?>" required>
                                </div>
                            </div>
                            <!-- description -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Description <sup>*</sup></label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="short_des" rows="7" placeholder="Provide your description ...." required><?=$list[0]->short_des?></textarea>
                                </div>
                            </div>
                            <!-- price -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Price <sup>*</sup></label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder="price" name="price" value="<?=$list[0]->price?>" required>
                                </div>
                            </div>
                            <!-- optional info 01 -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Optional info.</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="opt_01" value="<?=$list[0]->opt_01?>"  placeholder="Optional info" >
                                </div>
                            </div>
                            
                            <!-- optional info 02 -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Optional info.</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="opt_02" value="<?=$list[0]->opt_02?>"  placeholder="Optional info"  >
                                </div>
                            </div>
                            <!-- optional info 03 -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Optional info.</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="opt_03" value="<?=$list[0]->opt_03?>"  placeholder="Optional info"  >
                                </div>
                            </div>
                            <!-- optional info 04 -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Optional info.</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="opt_04" value="<?=$list[0]->opt_04?>"  placeholder="Optional info" >
                                </div>
                            </div>
                            <!-- is popular -->
                            <div class="form-group">
                                <label for="inputstatus" class="col-sm-2 control-label">Status <sup>*</sup></label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="isPopular">
                                    <?php if($list->isPopular == 0) {
                                        echo '<option value="0" selected >General</option>
                                              <option value="1">Popular</option>';
                                    } else {
                                        echo '<option value="0">General</option>
                                              <option value="1" selected >Popular</option>';
                                    } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-6">
                                    <input type="hidden" name="id" value="<?=$list[0]->id?>" />
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    <?=form_close()?>
                </div><!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
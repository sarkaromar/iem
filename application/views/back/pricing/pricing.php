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
                        <h3 class="box-title">Add form</h3>
                    </div><!-- /.box-header -->
                    <!-- form -->
                    <?=form_open(site_url("admin_panel/add_pricing"), array("class" => "form-horizontal"))?>
                        <div class="box-body">
                            <!-- name -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Package name <sup>*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Name" name="name" required>
                                </div>
                            </div>
                            <!-- description -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Description <sup>*</sup></label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="short_des" rows="7" placeholder="Provide your description ...." required></textarea>
                                </div>
                            </div>
                            <!-- price -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Price <sup>*</sup></label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder="price" name="price" required>
                                </div>
                            </div>
                            <!-- optional info 01 -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Optional info.</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="opt_01"  placeholder="Optional info" >
                                </div>
                            </div>
                            
                            <!-- optional info 02 -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Optional info.</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="opt_02"  placeholder="Optional info"  >
                                </div>
                            </div>
                            <!-- optional info 03 -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Optional info.</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="opt_03"  placeholder="Optional info"  >
                                </div>
                            </div>
                            <!-- optional info 04 -->
                            <div class="form-group">
                                <label for="inputphn" class="col-sm-2 control-label">Optional info.</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="opt_04"  placeholder="Optional info" >
                                </div>
                            </div>
                            <!-- is popular -->
                            <div class="form-group">
                                <label for="inputstatus" class="col-sm-2 control-label">Status <sup>*</sup></label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="isPopular">
                                            <option value="0">General</option>
                                            <option value="1">Popular</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </div>
                    <?=form_close()?>
                </div><!-- /.box -->
            </div>
        </div>
        <!-- list row -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <!-- box header -->
                    <?php if(empty($lists)) : ?>
                        <div class="box-header">
                            <h3 class="box-title">No List Found!</h3>
                        </div>
                    <?php else: ?>
                    <div class="box-header">
                        <h3 class="box-title">List</h3>
                    </div>
                    <!-- box content -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>price</th>
                                    <th>option info.</th>
                                    <th>option info.</th>
                                    <th>option info.</th>
                                    <th>option info.</th>
                                    <th>status</th>
                                    <th>Actions</th>
                                </tr>
                                <?php $x = 0; foreach($lists as $list) : $x++; ?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $list->name; ?></td>
                                    <td>
                                        <?php 
                                            $a = $list->short_des;
                                            if (strlen($a) > 10) {
                                                $stringCut = substr($a, 0, 10);
                                                echo $stringCut . '...';
                                            }else{
                                                echo $a;
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $list->price; ?></td>
                                    <td>
                                        <?php 
                                            $a = $list->opt_01;
                                            if (strlen($a) > 10) {
                                                $stringCut = substr($a, 0, 10);
                                                echo $stringCut . '...';
                                            }else{
                                                echo $a;
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $a = $list->opt_02;
                                            if (strlen($a) > 10) {
                                                $stringCut = substr($a, 0, 10);
                                                echo $stringCut . '...';
                                            }else{
                                                echo $a;
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $a = $list->opt_03;
                                            if (strlen($a) > 10) {
                                                $stringCut = substr($a, 0, 10);
                                                echo $stringCut . '...';
                                            }else{
                                                echo $a;
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $a = $list->opt_04;
                                            if (strlen($a) > 10) {
                                                $stringCut = substr($a, 0, 10);
                                                echo $stringCut . '...';
                                            }else{
                                                echo $a;
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if($list->isPopular == 0){
                                            echo '<span class="label label-primary">General</span>';
                                        }elseif($list->isPopular == 1){
                                            echo '<span class="label label-danger">Popular</span>';
                                        } ?>
                                    </td>
                                    <td>
                                        <a href="<?=site_url('admin_panel/edit_pricing/' . $list->id) ?>" data-toggle="tooltip" title="Edit" data-original-title="Edit"><i class="fa  fa-file-text"></i></a>
                                        |
                                        <a href="<?=site_url('admin_panel/delete_pricing/' . $list->id) ?>" onclick="return checkDelete();"><i class="fa fa-trash text-red"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php endif; ?>
                </div>  
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
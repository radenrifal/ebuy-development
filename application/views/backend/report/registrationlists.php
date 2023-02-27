<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#"><?php echo lang('menu_report') ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo lang('menu_report_register'); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0"><?php echo lang('menu_report_register') .' '. lang('agent'); ?> </h3>
                        </div>
                    </div>
                </div>
                <div class="table-container">
                    <table class="table align-items-center table-flush" id="list_table_member" data-url="<?php echo base_url('member/registerlistdata'); ?>">
                        <thead class="thead-light">
                            <tr role="row" class="heading">
                                <th scope="col" style="width: 10px">#</th>
                                <th scope="col" class="text-center"><?php echo lang('registrant'); ?></th>
                                <th scope="col" class="text-center">Sponsor</th>
                                <th scope="col" class="text-center"><?php echo lang('username'); ?></th>
                                <th scope="col"><?php echo lang('name'); ?></th>
                                <th scope="col" class="text-center"><?php echo lang('nominal'); ?></th>
                                <th scope="col" class="text-center"><?php echo lang('status'); ?></th>
                                <?php if ( $is_admin ) { ?>
                                    <th class="width15 text-center"><?php echo lang('access'); ?></th>
                                <?php } ?>
                                <th scope="col" class="text-center"><?php echo lang('join_date'); ?></th>
                                <th scope="col" class="text-center"><?php echo lang('confirm_date'); ?></th>
                                <th scope="col" class="text-center"><?php echo lang('actions'); ?></th>
                            </tr>
                            <tr role="row" class="filter" style="background-color: #f6f9fc">
                                <td></td>
                                <td><input type="text" class="form-control form-control-sm form-filter" name="search_member" /></td>
                                <td><input type="text" class="form-control form-control-sm form-filter" name="search_sponsor" /></td>
                                <td><input type="text" class="form-control form-control-sm form-filter" name="search_username" /></td>
                                <td><input type="text" class="form-control form-control-sm form-filter" name="search_name" /></td>
                                <td>
                                    <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_omzet_min" placeholder="Min" />
                                    </div>
                                    <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_omzet_max" placeholder="Max" />
                                </td>
                                <td>
                                    <select name="search_status" class="form-control form-control-sm form-filter">
                                        <option value=""><?php echo lang('select'); ?>...</option>
                                        <option value="pending">PENDING</option>
                                        <option value="confirmed">CONFIRMED</option>
                                        <option value="cancelled">CANCELLED</option>
                                    </select>
                                </td>
                                <?php if ( $is_admin ) { ?>
                                    <td>
                                        <select name="search_access" class="form-control form-filter input-sm">
                                            <option value=""><?php echo lang('select'); ?>...</option>
                                            <option value="admin">ADMIN</option>
                                            <option value="member">AGEN</option>
                                            <option value="ewallet">DEPOSITE BONUS</option>
                                            <option value="referral">REFERRAL</option>
                                            <option value="shop">SHOP</option>
                                        </select>
                                    </td>
                                <?php } ?>
                                <td>
                                    <div class="input-group input-group-sm date date-picker mb-1" data-date-format="yyyy-mm-dd">
                                        <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datecreated_min" placeholder="From" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-sm btn-white btn-flat" type="button"><i class="ni ni-calendar-grid-58 text-primary"></i></button>
                                        </span>
                                    </div>
                                    <div class="input-group input-group-sm date date-picker" data-date-format="yyyy-mm-dd">
                                        <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datecreated_max" placeholder="To" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-sm btn-white btn-flat" type="button"><i class="ni ni-calendar-grid-58 text-primary"></i></button>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group input-group-sm date date-picker mb-1" data-date-format="yyyy-mm-dd">
                                        <input type="text" class="form-control form-control-sm form-filter" readonly name="search_dateconfirm_min" placeholder="From" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-sm btn-white btn-flat" type="button"><i class="ni ni-calendar-grid-58 text-primary"></i></button>
                                        </span>
                                    </div>
                                    <div class="input-group input-group-sm date date-picker" data-date-format="yyyy-mm-dd">
                                        <input type="text" class="form-control form-control-sm form-filter" readonly name="search_dateconfirm_max" placeholder="To" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-sm btn-white btn-flat" type="button"><i class="ni ni-calendar-grid-58 text-primary"></i></button>
                                        </span>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <button class="btn btn-sm btn-block btn-outline-default btn-tooltip filter-submit" id="btn_list_table_member" title="Search"><i class="fa fa-search"></i></button>
                                    <button class="btn btn-sm btn-block btn-outline-warning btn-tooltip filter-cancel" title="Reset"><i class="fa fa-times"></i></button>
                                </td>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <!-- Data Will Be Placed Here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN CONFIRMATION MODAL -->
<div class="modal fade" id="modal_select_stockist" tabindex="-1" role="basic" aria-hidden="true" data-url="<?php echo base_url('member/asstockist/') ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Pilihan Stokis</h4>
            </div>
            <div class="modal-body" data-admin="<?php echo $is_admin ? 1 : 0; ?>">
                <div id="alert_form_stockist" class="alert display-hide"></div>
                <?php echo form_open( base_url('member/asstockist/'), array( 'id'=>'form_select_stockist', 'role'=>'form', 'class'=>'form-horizontal' ) ); ?>
                <input type="hidden" name="asmember" id="asmember" class="form-control change-stockist">
                <input type="hidden" name="ascontainer" class="form-control change-stockist change-stockist change-stockist-container">
                <div class="form-group">
                    <label class="control-label col-md-3">Username</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control change-stockist change-stockist-username" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Nama</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control change-stockist change-stockist-name" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jenis Stokis</label>
                    <div class="col-md-7">
                        <select class="form-control" name="select_stockist" id="select_stockist">
                            <option value="1">STOCKIST</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Provinsi</label>
                    <div class="col-md-7">
                        <select class="form-control" name="stockist_province" id="stockist_province" data-url="<?php echo base_url('member/selectprovince'); ?>">
                            <option value="">SILAHKAN PILIH PROPINSI</option>
                            <?php
                                if( $provinces = ddm_provinces() ){
                                    foreach($provinces as $p){
                                        echo '<option value="'.$p->id.'">'.$p->province_name.'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Kota/Kabupaten</label>
                    <div class="col-md-7">
                        <select class="form-control" name="stockist_city" id="stockist_city">
                            <option value="">SILAHKAN PILIH KOTA/KABUPATEN</option>
                        </select>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-info" id="do_save_asstockist">Lanjut</button>
            </div>
        </div>
    </div>
</div>
<!-- END CONFIRMATION MODAL -->

<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>




         <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-users" aria-hidden="true"></i> Employee  KCB Export Sheet</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Employee </li>
                    </ol>
                </div>
            </div>
            <div class="message"></div>
            <div class="container-fluid">
                <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="<?php echo base_url(); ?>employee/Add_employee" class="text-white"><i class="" aria-hidden="true"></i> Add Employee</a></button>
 
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Employee List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                <div>
                                    
                                    </div>
<center>                                    <img src="<?php echo base_url();?>assets/images/hrinv.png" alt="DRI" class="DRI-logo" style="width:200px;"/>
</center>
                                <center><h3><b><u>HILIFE CAPITAL LIMITED</u></b></h3></center>

                                    <table id="employees123" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>KCB Debit From A/C</th>
                                                <th>BIC/ Sort Code</th>
                                                <th>Beneficiary Name</th>
                                                <th>Employee Bank</th>
                                                <th>Branch Of Employee Bank</th>
                                                <th>BIC/Sort Code</th>
                                                <th>AC NO/Phone Number</th>
                                                <th>Net Pay</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                               <tr>
                                               <th>KCB Debit From A/C</th>
                                               <th>BIC/Sort Code</th>
                                               <th>Beneficiary Name</th>
                                                <th>Employee  Bank</th>
                                                <th>Branch Of Employee Bank</th>
                                                <th>BIC/Sort Code</th>
                                                <th>AC NO/Phone Number</th>
                                                <th>Net Pay</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php foreach($employee as $value): ?>
                                            <tr>
                                                 <td>128613356</td>
                                                 <td>01108</td>
                                                 <td title="<?php echo $value->first_name .' '.$value->last_name; ?>"><?php echo $value->first_name .' '.$value->last_name; ?></td>
                                                <td></td>
                                                <td>Branch Of Employee Bank</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                               
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php $this->load->view('backend/footer'); ?>
<script>
    $('#employees123').DataTable({
        "aaSorting": [[1,'asc']],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
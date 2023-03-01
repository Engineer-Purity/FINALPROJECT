<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>

         <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-users" aria-hidden="true"></i> Employee  NHIF Export Sheet</h3>
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
</center>
                                <center><h3><b><u>HILIFE CAPITAL LIMITED</u></b></h3></center>

                                    <table id="employees123" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Employee ID</th>
                                                <th>First Name</th>
                                                <th>Last Name </th>
                                                <th>KRA PIN</th>
                                                <th>Amount </th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                               <tr>
                                               <th>Employee ID</th>
                                                <th>First Name</th>
                                                <th>Last Name </th>
                                                <th>KRA PIN</th>
                                                <th>Amount </th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php foreach($employee as $value): ?>
                                            <tr>
                                                <td><?php echo $value->em_code; ?></td>
                                                <td title="<?php echo $value->first_name .' '.$value->last_name; ?>"><?php echo $value->first_name; ?></td>
                                                <td>  <?php echo $value->last_name; ?>  </td>
                                                <td></td>
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
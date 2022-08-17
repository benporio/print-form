<?php
session_start();
include_once('../../../config/config.php');
$serviceType = $_GET['serviceType'];

if ($serviceType == 'I'){
?>

 
<?php
}

else{
?>

  <tr style="background-color: white; "  >
		 	<td class="rowno text-right" style="background-color: lightgray;color:black; font-size:13px;">
			<span>1</span>
			<button type="button" class="btn d-none btnrowfunctions" data-toggle="dropdown" style="width:1px; padding-left: 0px !important;margin-left: 0px !important">
				<i class="fas fa-caret-down" ></i>
			</button>
			 <ul class="dropdown-menu rowfunctions" role="menu" style="background-color: #fdfd96;">
				<li class="deleterow" style="font-size:20px; color: black; font-weight:bold">Delete Row</a></li>
				<li class="duplicaterow"style="font-size:20px; color: black; font-weight:bold">Duplicate Row</a></li>
			  </ul>
		  </td>
		  <td>
				<div class="input-group ">
					<input type="text" class="form-control matrix-cell glaccount"  aria-label="Recipient's username" aria-describedby="button-addon2" style="outline: none; border:none" readonly/>
				  <button class="btn btnGroup"   type="button" data-mdb-ripple-color="dark"  style="background-color: #ADD8E6; "  data-toggle="modal" data-target="#glModal" data-backdrop="false">
					<i class="fas fa-list-ul input-prefix" tabindex=0 style="color:blue " ></i>
				  </button>
				</div>
		  </td>
		  <td >
				<input type="text" class="form-control matrix-cell glname"  aria-label="" aria-describedby="button-addon2" style="outline: none; border:none" maxlength="12" readonly/>
				<input type="hidden" class="form-control matrix-cell text-right quantity"  aria-label="" aria-describedby="button-addon2" style="outline: none; border:none" maxlength="12" value="1" />
		  </td>
		  <td >
		  	<div class="input-group " >
					<input type="text" class="form-control matrix-cell text-right controlaccount"   aria-label="" aria-describedby="button-addon2" style="outline: none; border:none" maxlength="12" readonly/>
				  <button class="btn btnaccount btnGroup"   type="button" data-mdb-ripple-color="dark"  style="background-color: #ADD8E6; "  data-toggle="modal" data-target="#glControlAccountModal" data-backdrop="false">
					<i class="fas fa-list-ul input-prefix" tabindex=0 style="color:blue " ></i>
				  </button>
				</div>
		  </td>
		  <td >
				<input type="text" class="form-control matrix-cell text-right debit"    maxlength="12" style="outline: none; border:none" maxlength="12" />
		  </td>
		  <td >
				<input type="text" class="form-control matrix-cell text-right credit"    maxlength="12" style="outline: none; border:none" maxlength="12" />
		  </td>
		  <td >
				<div class="input-group ">
					<input type="text" class="form-control text-right d-none branch"   style="outline: none; border:none" maxlength="8"/>
					<select type="text" class="form-control bplid"  placeholder="" style="outline: none; border:none"  readonly >
							<?php
												$qry = odbc_exec($MSSQL_CONN, "USE [".$MSSQL_DB."]; SELECT BplId,U_BranchCode,BplName FROM OBPL WHERE U_BranchCode <> '' ");
													while (odbc_fetch_row($qry)) 
													{
														//echo odbc_result($qry, 'NextNumber');
														echo '<option  class="taxoptions" value="' . odbc_result($qry, "BplId") . '"  val-rate="'.odbc_result($qry, "BplName").'">' . odbc_result($qry, "U_BranchCode") . '</option>';
													}
													
													odbc_free_result($qry);
											?>
						</select>
				</div>
		  </td>
		  <td >
				<input  type="text" class="form-control matrix-cell branchname " style="outline: none; border:none" readonly/>	
		  </td>
		  <td >
				<div class="input-group " >
					<input type="text" class="form-control matrix-cell department"   aria-label="" aria-describedby="button-addon2" style="outline: none; border:none" maxlength="12" readonly/>
				  <button class="btn  btnGroup"   type="button" data-mdb-ripple-color="dark"  style="background-color: #ADD8E6; "  data-toggle="modal" data-target="#profitcodeModal" data-backdrop="false">
					<i class="fas fa-list-ul input-prefix" tabindex=0 style="color:blue " ></i>
				  </button>
				</div>
		  </td>
		  <td >
				<div class="input-group " >
					<input type="text" class="form-control matrix-cell branchocrcode2"   aria-label="" aria-describedby="button-addon2" style="outline: none; border:none" maxlength="12" readonly/>
				  <button class="btn  btnGroup"   type="button" data-mdb-ripple-color="dark"  style="background-color: #ADD8E6; "  data-toggle="modal" data-target="#branchocrcode2Modal" data-backdrop="false">
					<i class="fas fa-list-ul input-prefix" tabindex=0 style="color:blue " ></i>
				  </button>
				</div>
		  </td>
		  <td >
				<div class="input-group " >
					<input type="text" class="form-control matrix-cell employeeorccode3"   aria-label="" aria-describedby="button-addon2" style="outline: none; border:none" maxlength="12" readonly/>
				  <button class="btn  btnGroup"   type="button" data-mdb-ripple-color="dark"  style="background-color: #ADD8E6; "  data-toggle="modal" data-target="#employeeorccode3Modal" data-backdrop="false">
					<i class="fas fa-list-ul input-prefix" tabindex=0 style="color:blue " ></i>
				  </button>
				</div>
		  </td>
		  <td class="d-none">
				<input type="text" class="form-control matrix-cell shortname"    maxlength="12" style="outline: none; border:none" maxlength="12" />
		  </td>
		   <td class="d-none">
				<input type="text" class="form-control matrix-cell type"    maxlength="12" style="outline: none; border:none" maxlength="12" />
		  </td>
    </tr>
	<?php
}
?>
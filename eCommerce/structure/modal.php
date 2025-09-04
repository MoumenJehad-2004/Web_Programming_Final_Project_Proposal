<div class="modal fade" id="AddCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="add-category" >
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name*</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name">
                            <input type="hidden" class="form-control" id="id" name="id">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Status*</label>
                        <div class="col-sm-6">
                            <select name="status" id="status" class="form-control">
                                <option value=""> -- Select Category Status </option>
                                <option value="1"> Active</option>
                                <option value="0"> Diactive </option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="add-category-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>   

<div class="modal fade" id="AddProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="add-product">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name*</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter Product Name">
                            <input type="hidden" class="form-control" id="id" name="id">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Category*</label>
                        <div class="col-sm-6">
                            <select name="category" id="category" class="form-control">
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Price*</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="price" name="price">
                        </div>
                    </div>
                     <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Quantity*</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="quantity" name="quantity">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Description*</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="description" name="description"
                                placeholder="Enter Product description">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Status*</label>
                        <div class="col-sm-6">
                            <select name="status" id="status" class="form-control">
                                <option value=""> -- Select Product Status </option>
                                <option value="1"> Active</option>
                                <option value="0"> Diactive </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                       <label for="inputEmail3" class="col-sm-3 col-form-label">Image </label>
                       <div id="photo"></div>
                       <div class="clearfix">&nbsp;</div>
                       <div class="col-sm-6">
                       <input type="file" class="form-control" id="imgFle" name="imgFle" >
                       <input type="hidden" name="oldImage" id="oldImage">
                       </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="add-product-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EditUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Status</h4>
			</div>
			<div class="modal-body">
			<div class="card-content">
						<form id="user">
							<div class="row mb-3">
								<label class="col-sm-4 col-form-label">Account Status:</label>
                                <div class="col-sm-8">
								<select class="form-control" id="status" name="status">
									<option value="">-- Select the privilege --</option>
									<option value="1">Active </option>
									<option value="0">Diactive</option>
								</select>
                                </div>
								<input type="hidden" name="uprivid" id="uprivid">
							</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="btn_user">Edit</button>
				<button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-dismiss="modal">Close</button>
			</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="EditPriv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Privileges</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="priv" >
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-5 col-form-label">Categories Management</label>
                        <div class="col-sm-7">
                            <select name="cat" id="cat" class="form-control">
                                <option value=""> -- Select Category Status </option>
                                <option value="1"> Active</option>
                                <option value="0"> Diactive </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-5 col-form-label">Product Management</label>
                        <div class="col-sm-7">
                            <select name="pro" id="pro" class="form-control">
                                <option value=""> -- Select Product Status </option>
                                <option value="1"> Active</option>
                                <option value="0"> Diactive </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-5 col-form-label">Privileges Management</label>
                        <div class="col-sm-7">
                            <select name="priv" id="priv" class="form-control">
                                <option value=""> -- Select Privileges Status </option>
                                <option value="1"> Active</option>
                                <option value="0"> Diactive </option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btn_priv">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 


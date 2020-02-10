<body>
<div class="container">

<div id="deleteModel" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">
       Really want to delete ?
      </div>
      <div class="modal-footer">
      	<button type="button" id="btnDelete" class="btn btn-danger" data-dismiss="modal">Delete</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="editModel" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit</h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="pwd">
		  </div>
      </div>
      <div class="modal-footer">
      	<button type="button" id="btnEdit" class="btn btn-success" data-dismiss="modal">Edit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div class="alert alert-success" style="display: none;">

</div>
<a href="http://localhost:8080/CIAjax/index.php/Product/index"><h1 class="display-4">Products</h1></a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price Naheed</th>
                <th>Price Imtiaz</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="showData">

        </tbody>
    </table>
    <script type="text/javascript">
    	$(function(){
    		showAllProduct();
    	});
    	    		function showAllProduct(){
    		$.ajax({
    			type: 'ajax',
    			url: 'http://localhost:8080/CIAjax/index.php/Product/showAllProducts',
    			async : false,
    			dataType: 'json',
    			success: function(data){
    				// alert(data);
    				var html = '';
    				var i;
    				for(i=0;i<data.length;i++){
    					html += '<tr>'+
    								'<td>'+data[i].id+'</td>'+
    								'<td>'+data[i].name+'</td>'+
    								'<td>'+'<img src="'+data[i].img+'" class="img-fluid" style="width:50%;">'+'</td>'+
    								'<td>Rs.'+data[i].pricenaheed+'</td>'+
    								'<td>Rs.'+data[i].priceimtiaz+'</td>'+
    								'<td>'+
    									'<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'">Edit</a>'+
    									'<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].id+'">Delete</a>'+
    								'</td>'+
    							'<tr>';
    				}
    				$('#showData').html(html);
    			},
    			error: function(){
    				alert('Could not get Data from database');
    			}

    		});
    	};
    	   $('#showData').on('click', '.item-delete',function(){
    		var id = $(this).attr('data');
    		 // alert(id);
    		 // exit;
    		$('#deleteModel').modal('show');
    		$('#btnDelete').unbind().click(function(){
    			$.ajax({
    				type: 'ajax',
    				method: 'get',
    				async: false,
    				url: 'http://localhost:8080/CIAjax/index.php/Product/deleteProduct',
    				data:{id:id},
    				dataType: 'json',
    				success: function(response){
    					if(response.success){
    						$('#deleteModal').modal('hide');
    						$('.alert-success').html('Product Deleted').fadeIn().delay(2000).fadeOut('slow');
    						showAllProduct();
    					}
    					else{
    						alert(response); 
    					}
    				},
    				error: function(){
    					alert('Error Deleting');
    				}
    			});
    		});
    	});
    	   $('#showData').on('click', '.item-edit',function(){
    		var id = $(this).attr('data');
    		 // alert(id);
    		 // exit;
    		$('#editModel').modal('show');
    		$('#editDelete').unbind().click(function(){
    			$.ajax({
    				type: 'ajax',
    				method: 'get',
    				async: false,
    				url: 'http://localhost:8080/CIAjax/index.php/Product/deleteProduct',
    				data:{id:id},
    				dataType: 'json',
    				success: function(response){
    					if(response.success){
    						$('#deleteModal').modal('hide');
    						$('.alert-success').html('Product Deleted').fadeIn().delay(2000).fadeOut('slow');
    						showAllProduct();
    					}
    					else{
    						alert(response); 
    					}
    				},
    				error: function(){
    					alert('Error Deleting');
    				}
    			});
    		});
    	});
    </script>
</div>
</body>

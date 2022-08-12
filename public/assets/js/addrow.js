
      $(document).ready(function() {
	var x = 0;
	$('#save_btn').hide();

	$('#add_btn').click(function(e) {
  	e.preventDefault();
    appendRow(); // appen dnew element to form
    x++; // increment counter for form
    $('#save_btn').show(); // show save button for form
  });

	$('#input_wrapper').on('click', '.deleteBtn', function(e) {
  	e.preventDefault();
    var id = e.currentTarget.id; // set the id based on the event 'e'
    $('div[id='+id+']').remove(); //find div based on id and remove
    x--; // decrement the counter for form.

    if (x === 0) {
    	$('#save_btn').hide(); // hides the save button if counter is equal to zero
    }
  });

  $('#save_btn').click(function(e) {
  	e.preventDefault();
    var formData = $('#test_form').serializeObject(); // serialize the form
    var obj; //obj can be use to send to ajax call
    if(Array.isArray(formData.fn)) {
    	for(var i = 0; i < formData.fn.length; i++) {
      	obj = {};
        // set the obj for submittion
        obj.firstName = formData.fn[i];
        obj.lastName = formData.ln[i];
        // This object could be push into an array
        console.log('object from form array ', obj);
      };
    } else {
    	obj = {};
      obj.firstName = formData.fn;
      obj.lastName = formData.ln;
      console.log('single obj from form ', obj);
    }
  });

  function appendRow() {
    $('#input_wrapper').append(
        '<div id="'+x+'" class="form-group" style="display:flex;">' +
          '<div>' +
            '<input type="text" id="'+x+'" class="form-control" name="fn" 									placeholder="First Name"/>' +
          '</div>' +
          '<div>'+
          '<input type="text" id="'+x+'" class="form-control" name="ln"											placeholder="Last Name"/>'+
          '</div>' +
          '<div>'+
            '<button id="'+x+'" class="btn btn-danger deleteBtn"><i class="glyphicon glyphicon-trash"></i></button>' +
          '</div>' +
      	'</div>');
  }

});

$.fn.serializeObject = function(asString) {
   var o = {};
   var a = this.serializeArray();
   $.each(a, function() {

       if($('#' + this.name).hasClass('date')) {
           this.value = new Date(this.value).setHours(12);
       }

       if (o[this.name] !== undefined) {
           if (!o[this.name].push) {
               o[this.name] = [o[this.name]];
           }
           o[this.name].push(this.value || '');
       } else {
           o[this.name] = this.value || '';
       }
   });
   if (asString) {
       return JSON.stringify(o);
   }
   return o;
};

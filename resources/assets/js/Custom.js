var App = function () {
	
	var BookCreate = function() {
		
		// รับค่าจากฟอร์ม
		var isbn = $("input[name=isbn]");
		var title = $("input[name=title]");
		var author = $("input[name=author]");
		var publisher = $("input[name=publisher]");
		var button = $("button#submit");
		var result = $("div.showresult");
		var _token = $("input[name=_token");

		// Event
		$(button).click(function(){
			
			// POST DATA TO Controller
			$.ajax({
				url: '../book',
				type: 'POST',
				cache:false,
				data: {
					isbn:isbn.val(),
					title:title.val(),
					author:author.val(),
					publisher:publisher.val(),
					_token:_token.val()
				},
				beforeSend:function() {
					result.html("กำลังส่งข้อมูล...");
				},
				complete:function() {
					//result.html("");
				},
				success: function (data) {
					result.html(data);
					// Reset form value
					$("form#add_book").trigger('reset');
					$(isbn).focus();
				}
			},"json");

			return false; // disable form submit
		});
	}


	var ShowBook = function() {
		$("div.showresult").load('book/showbook');	
	}

	return {
		init: function () {
                	     	//initialize here something.            
            		},

            		doBookCreate: function () {
                		BookCreate();
            		},
            		doShowBook:function()
            		{
            			ShowBook();
            		}
	};
}();
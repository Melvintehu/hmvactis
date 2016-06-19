Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('input[name="_token"]').value;

Vue.directive('ajax', {

	bind: function(){
		$("form #newsPhotoUpload").submit(function (e) {
		    e.preventDefault();
		    var formId = this.id;  // "this" is a reference to the submitted form
		});
		this.el.addEventListener('submit', this.onSubmit.bind(this));

	},

	update: function(value){
		
	},

	onSubmit: function(e){

		e.preventDefault();
		alert('yes');
		 this.vm
		 	.$http[this.getRequestType()](this.el.action)
		 	.then(this.onComplete.bind(this));
	},

	onComplete : function(){
		alert('complete');
	},

	getRequestType: function(){
		var method = this.el.querySelector('input[name="_method"]');

		return (method ? method.value :  this.el.method).toLowerCase();
	},

});


new Vue({
	el: 'body'
});
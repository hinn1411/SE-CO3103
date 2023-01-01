$(".btn-edit").click(function (e) {
  var id = this.getAttribute('data-bs-id');
  var name = this.getAttribute('data-bs-name');
  var price = this.getAttribute('data-bs-price');
  var description = this.getAttribute('data-bs-description');
  var content = this.getAttribute('data-bs-content');
  var img = this.getAttribute('data-bs-img');
  var sale = this.getAttribute('data-bs-sale');

  $("#EditProductModal input[name='id']").val(id);
  $("#EditProductModal input[name='name']").val(name);
  $("#EditProductModal input[name='price']").val(price);
  $("#EditProductModal textarea[name='description']").val(description);
  $("#EditProductModal textarea[name='content']").val(content);
  $("#EditProductModal input[name='img']").val(img);
  $("#EditProductModal input[name='sale']").val(sale);
  $("#EditProductModal").modal("show");
});

$(".btn-delete").click(function (e) {
  var id = this.getAttribute('data-bs-id');
  $("#DeleteProductModal input[name='id']").val(id);
  $("#DeleteProductModal").modal("show");
});
$(document).ready(function () {
  $('#tab-product').DataTable();
});
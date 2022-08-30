var fadeTime = 300;

$('.user-removal button').click( function() {
  removeItem(this);
});

/* Remove */
function removeItem(removeButton)
{
  /* Remove row from DOM  */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
  });
}
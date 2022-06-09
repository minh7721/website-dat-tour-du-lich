dauChamSo();
function dauChamSo() {
  let arr = Array.from(document.getElementsByClassName("priceX"));
  const hashText = (str) => {
    let strReverse = str.trim().split("").reverse();
    let result = "";
    strReverse.forEach((char, index) => {
      if (index % 3 == 0) {
        result += ".";
      }
      result += char;
    });
    let strResult = result
      .split("")
      .reverse()
      .join("")
      .slice(0, result.length - 1);
    return strResult.toString();
  };

  arr.forEach((element) => {
    element.textContent = hashText(element.textContent);
  });
}

$(document).ready(function () {
  // phanTrang(1);
  function phanTrang(page) {
    $.ajax({
      url: "http://localhost/website_book_tour/customer/?controller=customer&action=getTourPT",
      method: "POST",
      data: {
        page: page
      },
      success: function (dt) {
        $(".showTour").html(dt);
        dauChamSo();
      },
    });
  }
  $(".pageNum").on("click", function () {
    page = $(this).attr("page");
    phanTrang(page);
  });


  $('.contactBtnSubmit').on('click', function(){
    contactName = $('.contactName').html();
    console.log(contactName);
    contactEmail = $('.contactEmail').html();
    console.log(contactEmail);
    contactPhone = $('.contactPhone').html();
    console.log(contactPhone);
    contactContent = $('.contactContent').html();
    console.log(contactContent);
    contactMessage = $('.contactMessage').html();
    console.log(contactMessage);
  })


  $('.btnSearch').on('click', function(){
      var valSearch = $('.searchName').val();

      $.ajax({
          url: "?controller=customer&action=search",
          method: "POST",
          data: {
            valSearch: valSearch
          },
          success: function(dt){
            // $(".showTour").html(dt);
              console.log('OKE');
          },
          error: function(){
            console.log('Fail');
          }
      })
  })
});

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
      url: "?controller=customer&action=getTourPT",
      method: "POST",
      data: {
        page: page,
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
  
  $(".btnSearch").on("click", function () {
    var valSearch = $(".searchName").val();

    $.ajax({
      url: "?controller=customer&action=search",
      method: "POST",
      data: {
        valSearch: valSearch,
      },
      success: function (dt) {
        // $(".showTour").html(dt);
        // dauChamSo();
        console.log(dt);
      },
    });

    return false;
  });

  $(".contactBtnSubmit").on("click", function () {
    contactName = $(".contactName").val();
    contactEmail = $(".contactEmail").val();
    contactPhone = $(".contactPhone").val();
    contactContent = $(".contactContent").val();
    contactMessage = $(".contactMessage").val();

    $.ajax({
      url: "?controller=customer&action=contact",
      method: "POST",
      data: {
        contactName: contactName,
        contactEmail: contactEmail,
        contactPhone: contactPhone,
        contactContent: contactContent,
        contactMessage: contactMessage,
      },
      success: function(dt){{
        // alert('Gửi thông tin thành công');
        console.log(dt);
      }}
    });

    return false;
  });
});

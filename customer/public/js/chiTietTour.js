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
function openFilter() {
  document.querySelector(".modal").style.display = "block";
}
function closeFilter() {
  document.querySelector(".modal").style.display = "none";
}


// const openSort = document.querySelector(".by");
// openSort.addEventListener("click", function (event) {
//   event.currentTarget.classList.toggle("open");
// });

document.querySelector(".by").addEventListener("click", function (event) {
  event.preventDefault();
  var sort_item = document.querySelector(".sort_item");
  if (sort_item.classList.contains("open")) {
    sort_item.classList.remove("open");
  } else {
    sort_item.classList.add("open");
  }
});
document.querySelector(".division_click").addEventListener("click", function (event) {
  event.preventDefault();
  var sort_item_divi = document.querySelector(".sort_item-divi");
  if (sort_item_divi.classList.contains("open")) {
    sort_item_divi.classList.remove("open");
  } else {
    sort_item_divi.classList.add("open");
  }
});
document.querySelector(".sport_click").addEventListener("click", function (event) {
  event.preventDefault();
  var sort_item_sport = document.querySelector(".sort_item-sport");
  if (sort_item_sport.classList.contains("open")) {
    sort_item_sport.classList.remove("open");
  } else {
    sort_item_sport.classList.add("open");
  }
});
document.querySelector(".product_click").addEventListener("click", function (event) {
  event.preventDefault();
  var sort_item_type = document.querySelector(".sort_item-type");
  if (sort_item_type.classList.contains("open")) {
    sort_item_type.classList.remove("open");
  } else {
    sort_item_type.classList.add("open");
  }
});
document.querySelector(".brand_click").addEventListener("click", function (event) {
  event.preventDefault();
  var sort_item_brand = document.querySelector(".sort_item-brand");
  if (sort_item_brand.classList.contains("open")) {
    sort_item_brand.classList.remove("open");
  } else {
    sort_item_brand.classList.add("open");
  }
});

document.querySelector(".color").addEventListener("click", function (event) {
  event.preventDefault();
  var sort_item_checkb = document.querySelector(".checkb");
  if (sort_item_checkb.classList.contains("open")) {
    sort_item_checkb.classList.remove("open");
  } else {
    sort_item_checkb.classList.add("open");
  }
});
document.querySelector(".collection_click").addEventListener("click", function (event) {
  event.preventDefault();
  var sort_item_collec = document.querySelector(".sort_item-collec");
  if (sort_item_collec.classList.contains("open")) {
    sort_item_collec.classList.remove("open");
  } else {
    sort_item_collec.classList.add("open");
  }
});
// document.querySelector(".high_item_a").addEventListener("click", function (event) {
//   event.preventDefault();
//   var high_item_all = document.querySelector(".high-item-all");
//   if (high_item_all.classList.contains("open")) {
//     high_item_all.classList.remove("open");
//   } else {
//     high_item_all.classList.add("open");
//   }
// });

function high() {
  // const highA = document.querySelector(".high_item_a");
  const high_item_all = document.querySelector(".high-item-all");

  if (high_item_all.classList.contains("open")) {
    high_item_all.classList.remove("open");
  } else {
    high_item_all.classList.add("open");
  }
}
function closeFile() {
  document.querySelector(".modal-detail").style.display = "none";
}
function openFile() {
  document.querySelector(".modal-detail").style.display = "block";
}
function describe() {
  // const highA = document.querySelector(".describe-item");
  const describe_item_detail = document.querySelector(".describe-item");

  if (describe_item_detail.classList.contains("open")) {
    describe_item_detail.classList.remove("open");
  } else {
    describe_item_detail.classList.add("open");
  }
}
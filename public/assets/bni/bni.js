"use strict";

const BASE_URL = window.location.origin;

const URL_STEP_2 = "/landing2";
const URL_STEP_3 = "/landing3";

var redirectToStep2 = () => {
  window.location.href = BASE_URL + URL_STEP_2;
}

var submitForm = () => {

}

$(document).ready(function () {
	console.log(BASE_URL);
});

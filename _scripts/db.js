// Initialize Firebase
    var config = {
    apiKey: "AIzaSyAZtq-xlTnMi2bS6jxyVq9KAZx5B0SH5nY",
    authDomain: "drv-v1.firebaseapp.com",
    databaseURL: "https://drv-v1.firebaseio.com",
    projectId: "drv-v1",
    storageBucket: "",
    messagingSenderId: "762650707513"
  };
  firebase.initializeApp(config);

//connect to database
var database = firebase.database();

firebase.auth().onAuthStateChanged(function(user) {
 window.user = user; // user is undefined if no user signed in
});


var provider = new firebase.auth.GoogleAuthProvider();
// provider.addScope(‘profile’);
// provider.addScope(‘email’);

firebase.auth().signInWithPopup(provider).then(function(result) {
  // This gives you a Google Access Token. You can use it to access the Google API.
  var token = result.credential.accessToken;
  // The signed-in user info.
  var user = result.user;
  console.log(user);
  // ...
}).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // The email of the user's account used.
  var email = error.email;
  // The firebase.auth.AuthCredential type that was used.
  var credential = error.credential;
  // ...
});

//object literal notation
var reservationData = {};

//where to place the document.ready

$('document').ready(function() {
  console.log("ready");
});

  //click event to each li with class reservation-day
$('.reservation-day li').on('click', function() {

  // var day = $(this).reservationData.day.text();
  // why doesn't day appear on the dropdown when selected, still shows select a day
  reservationData.day = $(this).text();
  console.log(reservationData.day);

});
//need to use class on form
//can use submit as the event listener?
$('.reservation-form').on('submit', function(e) {
  e.preventDefault();

  //why using .val()
  // reservationData.name = $(this).text();
  //use jquery va() to get value off class reservation-name
  // <input type="text" class="form-control reservation-name" placeholder="Jane Doe">
  //calling the input not the button class name to retrieve the name value
  reservationData.name = $('.reservation-name').val();
  alert('reservation data sent');
  // create a section for reservations data in your db

  // is .ref a method or property? we created global var database in line 13, is it the same one here?
  var reservationsReference = database.ref('reservations');
  //this is Firebase's method push() to post the reservationData object, is push() exclusive to Firebase? 
  reservationsReference.push(reservationData);
});

// retrieve reservations data when page loads and when reservations are added
function getReservations() {

  // use reference to database to listen for changes in reservations data
  //what is on('value') used to seeing click or submit
  database.ref('reservations').on('value', function(results) {

      // Get all reservations stored in the results we received back from Firebase
      var allReservations = results.val();
      console.log(allReservations);
      // remove all list reservations from DOM before appending list reservations
      $('.reservations').empty();


// for (i=0; i < allReservations.length; i++) {
//  allReservations.context = {
//   "name" : "$this.name",
//   "day": "$this.day",
//   "reservationId": "$this.reservation"
//  }
//  console.log(context.name);
// };


// iterate (loop) through all reservations coming from database call
    for (var reservation in allReservations) {
    // Create an object literal with the data we'll pass to Handlebars
      var context = {
        name: allReservations[reservation].name,
        day: allReservations[reservation].day,
        reservationId: reservation
      };

      // console.log(context.name + ": " + context.day + "\n" + " ID: " + context.reservationId);
      var source = $("#reservation-template").html();

  var template = Handlebars.compile(source);

  var reservationListItem = template(context);

  $('.reservations').append(reservationListItem);
    }

  });

}

// When page loads, get reservations
getReservations();



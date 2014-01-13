var active = 'one';

function openmenu(id) {
  if (active == id) {
    return;
  }

  var items = ["one", "two"];

  if (items.indexOf(id) == -1) {
    return;
  }

  if (active == id) {
    $("#sec_" + active).fadeOut("normal");
    return;
  }

  if (active != null) {
    $("#sec_" + active).fadeOut("normal");
  }

  $("#sec_" + active).fadeOut("slow", function() {
    $("#sec_" + id).fadeIn("normal");
  });
  active = id;
  // console.log(active + ', ' + id);
  return false;
}

function logpop() {
	if(document.getElementById('logpop_overlay').style.display == 'block'){
			document.getElementById('sec_logpop').style.display = 'none';
			document.getElementById('sec_regpop').style.display = 'none';
			document.getElementById('logpop_overlay').style.display = 'none';
	}
	else{
		document.getElementById('sec_logpop').style.display = 'inline';
		document.getElementById('logpop_overlay').style.display = 'block';
	}
}

function regpop() {
	if(document.getElementById('logpop_overlay').style.display == 'block'){
			document.getElementById('sec_regpop').style.display = 'none';
			document.getElementById('sec_logpop').style.display = 'none';
			document.getElementById('logpop_overlay').style.display = 'none';
	}
	else{
		document.getElementById('sec_regpop').style.display = 'inline';
		document.getElementById('logpop_overlay').style.display = 'block';
	}
}


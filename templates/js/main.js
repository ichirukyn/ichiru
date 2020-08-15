
function roll ($sides) {
	return mt_rand(1,$sides);
}

document.querySelector("#one").onclick = function () {
        this.style.background = '#fff'
roll(24);

    }


var langs = ["#langEN", "#langDE", "#langES"]
var act = []
$(document).ready(() => {
	for (let lang of langs) {
		$(lang).click(() => {
			let checkedBox = $(lang).attr("checked")
			if (checkedBox === true) {
				if (act.length < 2) {
					act.push(lang)
				}
				if (act.length == 2) {
					for (let l of langs) {
						$(l).attr("disabled", true)
					}
					for (let l of act) {
						$(l).removeAttr("disabled")
					}
				}
			} else {
				act.splice(act.indexOf(lang), 1)
				for (let l of langs) {
					$(l).removeAttr("disabled")
				}
			}
		})
	}
})
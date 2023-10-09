var searchInput = document.querySelector("#search");
var autoComplete = document.querySelector("#autocomplete");

searchInput.addEventListener("input",  _.throttle(async event => {
    try {
        if (event.target.value.length == 0) { autoComplete.style.display = 'none'; }
        if (event.target.value.length >= 2) {
            const { data } = await axios.get('/experiences.php', {
                params: {
                    experience:event.target.value
                }
            });
            if (!data.length) { return notSearch(); }

            autoComplete.style.display = 'block';
            var experiencesFound = "<ul>";
            experiencesFound += data.map(experience => {
                return `
                    <li>${experience.title}</li>
                `;
            }).join('');
            experiencesFound += "</ul>";
            autoComplete.innerHTML = experiencesFound;
        }
    } catch (error) {
        console.log(error);
    }
}, 500));

function notSearch()
{
    autoComplete.style.display = 'block';
    autoComplete.innerHTML = `<div class="text-lg">Busca não encontrada!</div>`;
}
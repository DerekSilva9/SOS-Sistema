document.addEventListener("DOMContentLoaded", function() {
    var botoesSintomas = document.querySelectorAll(".botao-sintomas");

    botoesSintomas.forEach(function(botao) {
        botao.addEventListener("click", function(event) {
            var remedio = this.parentElement;
            var sintomas = remedio.querySelector(".sintomas");

            // Fecha todas as outras listas de sintomas
            document.querySelectorAll(".sintomas").forEach(function(outroSintoma) {
                if (outroSintoma !== sintomas) {
                    outroSintoma.classList.remove("show");
                }
            });

            // Alterna a exibição da lista de sintomas apenas para o remédio clicado
            sintomas.classList.toggle("show");

            // Evita que o evento de clique se propague para os elementos pais
            event.stopPropagation();
        });
    });

    // Fecha a lista de sintomas se clicar em qualquer área fora dela
    document.addEventListener("click", function() {
        document.querySelectorAll(".sintomas").forEach(function(sintoma) {
            sintoma.classList.remove("show");
        });
    });
});

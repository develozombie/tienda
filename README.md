Como crear un contenedor
-----
Start the Docker containers:

    az acr build --image nombreContenedor --registry nombreDockerRegistry rutaDeDockerFile
    az aks get-credentials -n nombreDeClusterDeKube -g nombreDeGrupoDeRecurso
    kubectl apply -f rutaDelYaml
    

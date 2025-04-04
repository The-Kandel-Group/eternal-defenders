let toastInstances = document.getElementsByClassName('toast');
for (let i = 0; i < toastInstances.length; i++)
{
    let toastInstance = toastInstances[i];
    let toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastInstance);
    toastBootstrap.show();
}

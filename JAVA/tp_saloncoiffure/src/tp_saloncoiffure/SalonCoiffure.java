package tp_saloncoiffure;

import java.util.ArrayList;

public class SalonCoiffure {

    private ArrayList<Client> listClient = new ArrayList<>();
    private ArrayList<Service> listService = new ArrayList<>();

    public void ajouterClient(String nom, String numeroTelephone) {
        Client clients = new Client(nom, numeroTelephone);
        listClient.add(clients);
    }

    public void ajouterService(String libelle, double prix) {
        Service services = new Service(libelle, prix);
        listService.add(services);
    }

    public void displayClientInscrit() {
        for (Client clientI : listClient) {
            clientI.displayInfoClient();
        }
    }

    public void displayServicePropose() {
        for (Service serviceP : listService) {
            serviceP.displayInfoService();
        }
    }

    public Client rechercherClient(String nom) {
        for (Client client : listClient) {
            if (client.getNom().equals(nom)) {
                return client;
            }
        }
        return null;
    }

    public Service rechercherService(String libelle) {
        for (Service service : listService) {
            if (service.getLibelle().equals(libelle)) {
                return service;
            }
        }
        return null;
    }

    public void supprimerClient(String nom) {
        for (int i = 0; i < listClient.size(); i++) {
            if (listClient.get(i).getNom().equals(nom)) {
                listClient.remove(i);
                break;
            }
        }
    }

    public void supprimerService(String libelle) {
        for (int i = 0; i < listService.size(); i++) {
            if (listService.get(i).getLibelle().equals(libelle)) {
                listService.remove(i);
                break;
            }
        }
    }

    public void modifNum(String nom, String numeroTelephone) {
        Client clientRecherche = rechercherClient(nom);
        if (clientRecherche != null) {
            clientRecherche.setNumeroTelephone(numeroTelephone);
            System.out.println("");
            System.out.println("Numéro de téléphone mise à jour : " + clientRecherche.getNumeroTelephone());
        } else {
            System.out.println("Client non trouvé.");
        }

    }

    public void modifPrix(String libelle, double prix) {
        Service serviceRecherche = rechercherService(libelle);
        if (serviceRecherche != null) {
            serviceRecherche.setPrix(prix);
            System.out.println("");
            System.out.println("Prix mise à jour : " + serviceRecherche.getPrix());
        } else {
            System.out.println("Client non trouvé.");
        }

    }

}

# Docker PHP Environment

A Docker PHP development environment that facilitates running PHP applications on Docker

## Prerequisites

   - docker
   - docker-compose

## Installation

##### 1. Clone the repository
    $ git clone https://github.com/alexberce/docker-env.git
   
##### 2. Create the .env file
    
    $ cp .env-example .env
    
> Change the variables from the .env file to match your configuration
   
##### 3. Create the containers
    
    $ docker-compose up
    
##### 4. Install composer dependencies
    
    $ cd app && composer install
    
**Commands:**

###### List all containers for the project

        $ docker-compose ps
        
###### Stop all running containers

        $ docker-compose stop        

###### Stop a single container

        $ docker-compose stop {container-name}

###### Delete all existing containers

        $ docker-compose down

###### Run commands inside a container

        $ docker-compose exec {container-name} bash
        
**Note:** 
> Apache will serve the files from **/app/public** directory

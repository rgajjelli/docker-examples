How to run this sample ?

docker run --name web1 -e AUTHOR="web1" -d -p 8085:80 -h web1 <IMAGE_ID/IMAGE_NAME:VER>
docker run --name web2 -e AUTHOR="web2" -d -p 8086:80 -h web2 <IMAGE_ID/IMAGE_NAME:VER>
docker run --name web3 -e AUTHOR="web3" -d -p 8087:80 -h web3 <IMAGE_ID/IMAGE_NAME:VER> 


If required to run individual container's, run the below commands
cd ./product

#Build docker image
docker build -t rg/dcompose:v1 .
#Run docker container in the background , -d specifies background option
docker run -itd --name rgajjelli-docompose_ex3 -p 5000:80 -v ${PWD}:/usr/src/app <IMAGE:Version> | <IMAGE_ID>

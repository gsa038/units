FROM node:current-alpine AS builder

WORKDIR /app
ENV PATH="./node_modules/.bin:$PATH"
COPY package.json package-lock.json ./
RUN npm install --silent
RUN npm install react-scripts@4.0.1 -g --silent
COPY . ./
CMD ["npm", "start"]

# RUN npm run build
# FROM nginx:mainline-alpine
# RUN apk --no-cache add curl
# RUN curl -L https://github.com/a8m/envsubst/releases/download/v1.2.0/envsubst-`uname -s`-`uname -m` -o envsubst && \
#     chmod +x envsubst && \
#     mv envsubst /usr/local/bin
# COPY ./site.conf /etc/nginx/nginx.template
# CMD ["/bin/sh", "-c", "envsubst < /etc/nginx/nginx.template > /etc/nginx/conf.d/default.conf && nginx -g 'daemon off;'"]
# COPY --from=builder /opt/web/build /usr/share/nginx/html
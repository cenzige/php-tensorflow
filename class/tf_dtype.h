#ifndef PHP_TENSORFLOW_DTYPE_H
#define PHP_TENSORFLOW_DTYPE_H

#include "tensorflow/c/c_api.h" // use this only

size_t tf_dtype_sizeof(TF_DataType type);

char valid_dtype(int64_t dtype);

#endif  /* PHP_TENSORFLOW_DTYPE_H */
